<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
// use App\Models\Cart;
use App\Models\User;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Transaction;
class TransactionsController extends Controller
{
    public function createPayStackpayment(){
        
        $fields = [
          'email' => 'customer@email.com',
          'amount' => '20000'
        ];

        // $fields = json_encode($fields);
        // var_dump($fields);

        $http= new \GuzzleHttp\Client([
            'headers'=>[
                'Content-Type'=>'application/json',
                'Authorization'=> ' Bearer sk_test_1166bf929bae79bdffaf027205d378c2344b7b81'
            ]
        ]);


        try{
           $response= $http->request('POST','https://api.paystack.co/transaction/initialize',
           ['verify' => false,
           'body'=> json_encode($fields)]
        );

        $data= json_decode($response->getBody());
    }catch(\GuzzleHttp\Exception\RequestException  $e){
        $data= json_decode($e->getResponse()->getBody(true));
    }

       return $data;
    }

    public function verifyPayStackpayment($refrence){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$refrence",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYHOST=> 0,
            CURLOPT_SSL_VERIFYPEER=> 0,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_1166bf929bae79bdffaf027205d378c2344b7b81",
            "Cache-Control: no-cache",
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }

    public function transactions(Request $request){
        
        $carts = Cart::where('user_id' , Auth::user()->id)->get();
        $products_id=[];
        $total=[];
        foreach($carts as $cart){
            if($cart->checked_out == false){
                $products = Product::where('id', $cart->product_id)->get();
                array_push($products_id, $cart->product_id);
                foreach($products as $product){
                    array_push($total, $product->price);
                }
                
            }
        }
        $transaction= new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->product_id= implode(",", $products_id);
        $transaction->status = 2;
        $transaction->amount= array_sum($total);
        $transaction->payment_method = $request['payment_method'];
        
        $transaction->trans_id= uniqid('Trans', true);
        if($request['payment_method'] == 'paystack'){
            $payment= $this->createPayStackpayment();
            var_dump($payment->data);
            $transaction->refrence = $payment->data->reference;
            $transaction->save();
            return redirect($payment->data->authorization_url);

        }
        
        
        
        
    }
}
