<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

class StoreController extends Controller
{
    public function productsPage(){
        $Products= Product::all();
        // $ProductsCategory= ProductCategory::all();
        return view("website.frontend.store.product", ['products'=> $Products]);
    }

    public function productPage($Product_id){
        $Product= Product::where('id', $Product_id)->first();
        return view("website.frontend.store.product-info", ['product'=> $Product]);
    }

    public function cartPage(){
        
    }

    public function AccountPage(){
        
    }

    public function userAuth(Request $request){
        $this->validate($request,[
            'email'=>'email|required',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->back();

        }
    }

    public function userRegister(Request $request){
        $this->validate($request,[
            'email'=>'email|required|unique:users',
            'name'=> 'required',
            'password'=>'required|min:4'
        ]);
        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);

        $user= New User();
        $user->email=$email;
        $user->name=$name;
        $user->password=$password;
        
        if ($user->save()) {
            Auth::login($user);
            return redirect()->back()->with(['message'=>'registered successfully']);
        }
        

       
    }

    public function makePaypalPayment(Request $request){

        $clientId = "Af00RKt9czF11PfH-5au7sWt_WIFFgmDjF3keD4cudM00SkwKw2nmRWtDJaCyTa_bRO9_YDYl00P-bwS";
        $clientSecret = "ELeogjGG-2KOxF_vdiBmhOtuRks47gKsNodi0g89ajn2E9mL1WyG9P-PM_cRObAxVdfucRLE-R6YFy0u";
    
        $environment = new SandboxEnvironment($clientId, $clientSecret);
        $client = new PayPalHttpClient($environment);
    
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
                            "intent" => "CAPTURE",
                            "purchase_units" => [
                                "reference_id" => "test_ref_id1",
                                "amount" => [
                                    "value" => "10.00",
                                    "currency_code" => "USD"
                                ]
                            ],
                            "application_context" => [
                                "cancel_url" => "https://example.com/cancel",
                                "return_url" => "https://example.com/return"
                            ] 
                        ];
    
        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($request);
            
            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            print_r($response);
        }catch (HttpException $ex) {
            echo $ex->statusCode;
            print_r($ex->getMessage());
        }
        
    }

    public function contPaypalPayment(Request $request){

        $clientId = "Af00RKt9czF11PfH-5au7sWt_WIFFgmDjF3keD4cudM00SkwKw2nmRWtDJaCyTa_bRO9_YDYl00P-bwS";
        $clientSecret = "ELeogjGG-2KOxF_vdiBmhOtuRks47gKsNodi0g89ajn2E9mL1WyG9P-PM_cRObAxVdfucRLE-R6YFy0u";
    
        $environment = new SandboxEnvironment($clientId, $clientSecret);
        $client = new PayPalHttpClient($environment);

        $request = new OrdersCaptureRequest("APPROVED-ORDER-ID");
        $request->prefer('return=representation');
        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($request);
            
            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            print_r($response);
        }catch (HttpException $ex) {
            echo $ex->statusCode;
            print_r($ex->getMessage());
        }
    }

}
