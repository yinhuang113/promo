<?php

require_once dirname(__FILE__) . '/common.php';

$client = new WildWest_Reseller_Client(
    WildWest_Reseller_Client::WSDL_OTE_TESTING, 
    $_SESSION['account'], $_SESSION['pass']
);

if (empty($_SESSION['complete'][5])) {
    echo json_encode(array('success' => false, 'message' => 'Complete Step #5 first'));
    exit();
}

$order = new WildWest_Reseller_OrderItem();
$order->duration = '1';
$order->productid = '350087';
$order->quantity = '1';
$order->riid = '1';

$order2 = clone $order;
$order2->productid = '350137';

$order3 = clone $order;
$order3->productid = '387001';

$item = new WildWest_Reseller_DomainRenewal();
$item->period = '1';
$item->resourceid = $_SESSION['resources']['example.biz'];
$item->sld = 'example';
$item->tld = 'biz';
$item->order = $order;

$item2 = new WildWest_Reseller_DomainRenewal();
$item2->period = '1';
$item2->resourceid = $_SESSION['resources']['example.biz'];
$item2->sld = 'example';
$item2->tld = 'us';
$item2->order = $order2;

$item3 = new WildWest_Reseller_DomainRenewal();
$item3->period = '1';
$item3->resourceid = $_SESSION['resources']['example.biz-dbp'];
$item3->sld = 'example';
$item3->tld = 'biz';
$item3->order = $order3;

$shopper = new WildWest_Reseller_Shopper();
$shopper->user = $_SESSION['userid'];
$shopper->pwd  = 'abcde';
$shopper->dbpuser = $_SESSION['dbpuser'];
$shopper->dbppwd = 'defgh';

try {
    $result = $client->OrderPrivateDomainRenewals($shopper, array($item, $item2), array($item3));
    $_SESSION['complete'][6] = true;
    echo json_encode(array('success' => true));
} catch (Exception $ex) {
    echo json_encode(array('success' => false, 'message' => $ex->getMessage()));
}