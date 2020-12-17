<?php
require __DIR__.'/../vendor/autoload.php';
// require 'C:/wamp64/www/lithos/app/Http/Controllers/TransactionsController.php';
use App\Http\Controllers\TransactionsController;

// var_dump(phpinfo());
$trans= new TransactionsController();
$trans->verifyPayStackpayment($_GET['reference']??'');