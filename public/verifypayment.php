<?php
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
// require 'C:/wamp64/www/lithos/app/Http/Controllers/TransactionsController.php';
use App\Http\Controllers\TransactionsController;

// var_dump(phpinfo());
$reference= $_GET['reference'];
$trans= new TransactionsController();
$verify =$trans->verifyPayStackpayment($reference);

$verify= json_decode($verify);
$updateStatus= $trans->verifyTransactions($verify->data->reference, $verify->data->status);
if($updateStatus== 'done'){
    echo  "<h1> Successfull </h1>";


}
// return header("Location: localhost:8000/products");