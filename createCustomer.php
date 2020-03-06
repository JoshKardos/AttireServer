
<?php


require_once('./stripe-php/init.php');
\Stripe\Stripe::setApiKey($_POST['stripeSecretKey']);

$email =  $_POST['email'] ;
$fullName = $_POST['name'];
$phone    = $_POST['phone'];

$key = \Stripe\Customer::create([
  'description' => 'testing','email'=>"$email",'phone'=>"$phone", 'name'=>"$fullName"
]);


echo json_encode($key);

?>
