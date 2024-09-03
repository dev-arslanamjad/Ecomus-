<?php
$subtotal = $_POST['price'];
$products = $_POST['product'];

require __DIR__ . "/vendor/autoload.php";
$stripe_secret_key = "sk_test_51PqYzsP2GGN4ZzRm2Ab2MEvF8UzZhwK2HYnsBbUSWBpL97RnUbCkz5TYeAQEd3jpVYvWcoA2mOWiZFRyrzpLGulJ00vjhxK09f";
\Stripe\Stripe::setApiKey($stripe_secret_key);
$line_items = [];
foreach ($products as $product) {
    $line_items[] = [
        "quantity" => $product['quantity'],
        "price_data" => [
            "currency" => "usd",
            "unit_amount" => $product['price'] * 100,
            "product_data" => [
                "name" => $product['name'],
                "description" => $product['model'],
            ]
        ]
    ];
}
$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/ecommerce/stripe_success.php?total=$subtotal&session_id={CHECKOUT_SESSION_ID}",
    "cancel_url" => "http://localhost/ecommerce/index.php",
    "locale" => "auto",
    "line_items" => $line_items,
]);
echo $response->id;
http_response_code(303);
header("Location: " . $checkout_session->url);
