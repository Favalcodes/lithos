<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use Sample\PayPalClient;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class StoreController extends Controller
{
    public function productsPage(){
        $Products= Product::all();
        // $ProductsCategory= ProductCategory::all();
        return view("website.frontend.store.product", ['products'=> $Products]);
    }

    public function productPage($Product_id){
        $products= Product::all();
        $Product= Product::where('id', $Product_id)->first();
        return view("website.frontend.store.product-info", ['product'=> $Product,'products'=> $products]);
    }

    public function cartPage(){
        
    }

    public function AccountPage(){
        
    }

    public function userAuth(Request $request){
        // $this->validate($request,[
        //     'email'=>'email|required',
        //     'password'=>'required'
        // ]);
// return "mad o";
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return Auth::user();

        }
        return "failed";
    }

    public function userRegister(Request $request){
        // $this->validate($request,[
        //     'email'=>'email|required|unique:users',
        //     'name'=> 'required',
        //     'password'=>'required|min:4'
        // ]);

        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);

        $user= New User();
        $user->email=$email;
        $user->name=$name;
        $user->password=$password;
        
        if ($user->save()) {
            Auth::login($user);
            return Auth::user();
        }
        return "failed";
        

       
    }

    public function makePaypalPayment(){

         $response= self::createOrder();
         return $response;
        
        
        
    }

    public function contPaypalPayment(Request $request){

       
        self::captureOrder('REPLACE-WITH-APPORVED-ORDER-ID', true);
        
        
    }

















    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    /**
     * Set up and return PayPal PHP SDK environment with PayPal access credentials.
     * This sample uses SandboxEnvironment. In production, use LiveEnvironment.
     */
    public static function environment()
    {
        $clientId = "Af00RKt9czF11PfH-5au7sWt_WIFFgmDjF3keD4cudM00SkwKw2nmRWtDJaCyTa_bRO9_YDYl00P-bwS";
        $clientSecret = "ELeogjGG-2KOxF_vdiBmhOtuRks47gKsNodi0g89ajn2E9mL1WyG9P-PM_cRObAxVdfucRLE-R6YFy0u";
        return new SandboxEnvironment($clientId, $clientSecret);
    }

    public static function createOrder($debug=false)
    {
      $request = new OrdersCreateRequest();
      $request->prefer('return=representation');
      $request->body = self::buildRequestBody();
     // 3. Call PayPal to set up a transaction
      $client = self::client();
      $response = $client->execute($request);
     
      
        print "Status Code: {$response->statusCode}\n";
        print "Status: {$response->result->status}\n";
        print "Order ID: {$response->result->id}\n";
        print "Intent: {$response->result->intent}\n";
        print "Links:\n";
        foreach($response->result->links as $link)
        {
          print "\t{$link->rel}: {$link->href}\tCall Type: {$link->method}\n";
        }
  
        // To print the whole response body, uncomment the following line
        // echo json_encode($response->result, JSON_PRETTY_PRINT);
      print_r($response);
  
      // 4. Return a successful response to the client.
    //   return  response($response, 200);
    return response()->json($response);
    }
  
    /**
       * Setting up the JSON request body for creating the order with minimum request body. The intent in the
       * request body should be "AUTHORIZE" for authorize intent flow.
       *
       */
      private static function buildRequestBody()
      {
          return array(
              'intent' => 'AUTHORIZE',
              'application_context' =>
                  array(
                      'return_url' => 'https://example.com/return',
                      'cancel_url' => 'https://example.com/cancel'
                  ),
              'purchase_units' =>
                  array(
                      0 =>
                          array(
                              'amount' =>
                                  array(
                                      'currency_code' => 'USD',
                                      'value' => '220.00'
                                  )
                          )
                  )
          );
      }


  // 2. Set up your server to receive a call from the client
  /**
   *This function can be used to capture an order payment by passing the approved
   *order ID as argument.
   *
   *@param orderId
   *@param debug
   *@returns
   */
  public static function captureOrder($orderId, $debug=false)
  {
    $request = new OrdersCaptureRequest($orderId);

    // 3. Call PayPal to capture an authorization
    $client = self::client();
    $response = $client->execute($request);
    // 4. Save the capture ID to your database. Implement logic to save capture to your database for future reference.
    if ($debug)
    {
      print "Status Code: {$response->statusCode}\n";
      print "Status: {$response->result->status}\n";
      print "Order ID: {$response->result->id}\n";
      print "Links:\n";
      foreach($response->result->links as $link)
      {
        print "\t{$link->rel}: {$link->href}\tCall Type: {$link->method}\n";
      }
      print "Capture Ids:\n";
      foreach($response->result->purchase_units as $purchase_unit)
      {
        foreach($purchase_unit->payments->captures as $capture)
        {   
          print "\t{$capture->id}";
        }
      }
      // To print the whole response body, uncomment the following line
      // echo json_encode($response->result, JSON_PRETTY_PRINT);
    }

    return $response;
  }



  
  

}
