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
    public function createPayStackpayment( $data){
        
        $fields = [
          'email' => $data['email'],
          'amount' => $data['amount']*100
        ];

        // $fields = json_encode($fields);
        var_dump($data);

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
                $cart->checked_out == true;
                $cart->update();
                array_push($products_id, $cart->product_id);
                foreach($products as $product){
                    $price= $product->price * $cart->quantity;
                    array_push($total, $price);
                }
                
            }
        }
        $transaction= new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->product_id= implode(",", $products_id);
        $transaction->status = 2;
        $transaction->amount= array_sum($total);
        $transaction->payment_method = $request['payment_method'];
        $amount= array_sum($total);
        $transaction->trans_id= uniqid('Trans', true);
       $data=[
           'email'=> $request['email'],
           'amount'=> $amount
       ];
            $payment= $this->createPayStackpayment($data);
            var_dump($payment);
            $transaction->refrence = $payment->data->reference;
            $transaction->save();
            return redirect($payment->data->authorization_url);

        
        
        
        
        
    }

    public function verifyTransactions($reference, $status){
        var_dump($status);
        $transaction= Transaction::where('refrence', $reference)->first();
        if($status=='success'){
            $transaction->status = 1;
        }
      
        $transaction->update();
        return 'done';

    }
}
