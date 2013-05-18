<?php

require_once dirname(__FILE__) . '/common.php';


$client = new WildWest_Reseller_Client(
    WildWest_Reseller_Client::WSDL_OTE_TESTING, 
    $_SESSION['account'], $_SESSION['pass']
);


if (empty($_SESSION['complete'][2])) {
    echo json_encode(array('success' => false, 'message' => 'Complete Step #2 first'));
    exit();
}

$shopper = new WildWest_Reseller_Shopper();
$shopper->firstname = 'Artemus';
$shopper->lastname  = 'Gordon';
$shopper->phone     = '+18885551212';
$shopper->user      = $_SESSION['userid'];
$shopper->pwd       = 'abcde';
$shopper->email     = 'agordon@wildwestdomains.com';
$shopper->dbpuser   = 'createNew';
$shopper->dbppwd    = 'defgh';
$shopper->dbpemail  = 'info@example.biz';

$order = new WildWest_Reseller_OrderItem();
$order->productid = '377001';
$order->quantity  = '1';
$order->riid      = '1';
$order->duration  = '1';

$dbp = new WildWest_Reseller_DomainByProxy();
$dbp->sld        = 'example';
$dbp->tld        = 'biz';
$dbp->order      = $order;
$dbp->resourceid = $_SESSION['resources']['example.biz'];

try {
    
    $response = $client->OrderDomainPrivacy($shopper, array($dbp));
    $messages = $client->Poll();
    $_SESSION['resources']['example.biz-dbp'] = $messages[0]['resourceid'];
    $_SESSION['dbporderid']                   = $messages[0]['orderid'];
    $_SESSION['dbpuser']                      = $response['dbpuser'];

    // echo "Step 3: Complete";
    $_SESSION['complete'][3] = true;
    echo json_encode(array('success' => true));
    
} catch (Exception $ex) {
    echo json_encode(array('success' => false, 'message' => $ex->getMessage() . 
                            " Developer's note: This step seems to often fail during " . 
                            "OTE certification. Try re-running the tests"));
}


