<?php
    require_once('vendor/autoload.php');
    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/Customer.php');
    require_once('models/Transaction.php');

\Stripe\Stripe::setApiKey('sk_test_51IdO1JB6SmotXwAFX1bZDm6rXwhuLgMoRxQl7LIlmMjjNYXPlaQiN9b2aowExf9WAyoWhDs16wXnyl54BUdlJQEQ009kQlDmmn');       //This means that we are going to work with our "server"


 //Get the form data tha has been submited
 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $firstName = $POST['firstName'];
 $surName = $POST['surName'];
 $email = $POST['email'];
 $phoneNumber = $POST['phoneNumber'];
 $street = $POST['street'];
 $number = $POST['number'];
 $postCode = $POST['postCode'];
 $city = $POST['city'];
 $country = $POST['country'];
 $messages = $POST['messages'];
 $token = $POST['stripeToken'];
  
 //echo $token;       //Create a token if the credit card is valid  

 // Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
  ));

  // Charge Customer
$charge = \Stripe\Charge::create(array(
    "amount" => 2000,
    "currency" => "eur",
    "description" => "Wallpaper poster",
    "customer" => $customer->id
  ));
  
// Customer Data
$customerData = [
    'id' => $charge->customer,
    'firstName' => $firstName,
    'surName' => $surName,
    'email' => $email,
    'phoneNumber' => $phoneNumber,
    'street' => $street,
    'number' => $number,
    'postCode' => $postCode,
    'city' => $city,
    'country' => $country
  ];

// Instantiate Customer
$customer = new Customer();

// Add Customer to DB
$customer->addCustomer($customerData);

// Transaction Data
$transactionData = [
  'id' => $charge->id,
  'description' => $charge->description,
  'messages' => $messages,
  'currency' => $charge->currency,
  'price' => $charge->amount,
  'donorId' => $charge->customer
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Cutomer to DB
$transaction->addTransaction($transactionData);


  //print_r($charge);         //Print the array with all the information that we can use

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);

?>