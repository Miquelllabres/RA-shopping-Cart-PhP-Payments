<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_DDpXJQpyvDewSNCLjrkPwRAh",
  "publishable_key" => "pk_test_hqzg2owgGvrmu3ysVLZICEGV"
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
