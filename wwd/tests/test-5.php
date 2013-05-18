<?php

require_once dirname(__FILE__) . '/common.php';

if (empty($_SESSION['complete'][4])) {
    echo json_encode(array('success' => false, 'message' => 'Complete Step #4 first'));
    exit();
}

$client = new WildWest_Reseller_Client(
    WildWest_Reseller_Client::WSDL_OTE_TESTING, 
    $_SESSION['account'], $_SESSION['pass']
);

try {
    $info = $client->Info($_SESSION['resources']['example.biz'], 'example.biz', $_SESSION['orderid']);
    $_SESSION['complete'][5] = true;
    echo json_encode(array('success' => true));
} catch (Exception $ex) {
    echo json_encode(array('success' => false, 'message' => $ex->getMessage()));
}
