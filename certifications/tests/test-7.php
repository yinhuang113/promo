<?php

require_once dirname(__FILE__) . '/common.php';

$client = new WildWest_Reseller_Client(
    WildWest_Reseller_Client::WSDL_OTE_TESTING, 
    $_SESSION['account'], $_SESSION['pass']
);


if (empty($_SESSION['complete'][6])) {
    echo json_encode(array('success' => false, 'message' => 'Complete Step #7 first'));
    exit();
}

$shopper = new WildWest_Reseller_Shopper();
$shopper->firstname = 'Joe';
$shopper->lastname = 'Smith';
$shopper->email = 'joe@smith.us';
$shopper->phone = '+1.7775551212';
$shopper->pwd = 'ghijk';
$shopper->user = 'createNew';

$order = new WildWest_Reseller_OrderItem();
$order->productid = '350011';
$order->quantity  = '1';

$transfer = new WildWest_Reseller_DomainTransfer();
$transfer->sld = 'example';
$transfer->tld = 'com';
$transfer->order = $order;

try {
    $response = $client->OrderDomainTransfers($shopper, array($transfer));
    $_SESSION['complete'][7] = true;
    echo json_encode(array('success' => true));
} catch (Exception $ex) {
    echo json_encode(array('success' => false, 'message' => $ex->getMessage()));
}