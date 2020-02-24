
<?php
try{
    
require_once('./stripe-php/init.php');

    if (!isset($_POST['api_version']) || !isset($_POST['customer_id']))
    {
        exit(http_response_code(400));
    }
try {
    \Stripe\Stripe::setApiKey('sk_test_c8WpTVTZOQnrqvqWXJJLaTeQ00whht62Tb');
    $key = \Stripe\EphemeralKey::create(
      ["customer" => $_POST['customer_id']],
      ["stripe_version" => $_POST['api_version']]
    );
    // echo "hello";
    header('Content-Type: application/json');
    echo json_encode($key);
} catch (Exception $e) {
    print_r($e);
    exit(http_response_code(500));
}


} catch (Exception $e) {
    print_r($e);
}
?>
