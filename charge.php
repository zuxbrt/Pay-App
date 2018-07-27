<?php

require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');
require_once('models/Transaction.php');

\Stripe\Stripe::setApiKey('sk_test_8BxTOeXo8UnKVVqmtt0IG6sf');

// sanitize post array
$data = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $data['first_name'];
$last_name = $data['last_name'];
$email = $data['email'];
$token = $data['stripeToken'];

// create stripe customer
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

// charge customer
$charge = \Stripe\Charge::create(array(
    "amount" => 50,
    "currency" => "usd",
    "description" => "suho meso",
    "customer" => $customer->id
));

// assign data to customer
$customerData = [
    'id' => $charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email
];

// instantiate customer
$customer = new Customer();


// add customer to db
$customer->addCustomer($customerData);


// assign data to transaction
$transactionData = [
    'id' => $charge->id,
    'customer_id' => $charge->customer,
    'product' => $charge->description,
    'amount' => $charge->amount,
    'currency' => $charge->currency,
    'status' => $charge->status
];

// instantiate transaction
$transaction = new Transaction();


// add transaction to db
$transaction->addTransaction($transactionData);


// redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);

print_r($charge);