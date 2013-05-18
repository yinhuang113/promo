<?php

require_once dirname(__FILE__) . '/common.php';

if (empty($_SESSION['complete'][3])) {
    echo json_encode(array('success' => false, 'message' => 'Complete Step #3 first'));
    exit();
}

$client = new WildWest_Reseller_Client(
    WildWest_Reseller_Client::WSDL_OTE_TESTING, 
    $_SESSION['account'], $_SESSION['pass']
);

$client->CheckAvailability(array('example.biz', 'example.us'));

//echo "Step #4: Check Complete for example.biz and example.us";
$_SESSION['complete'][4] = true;
echo json_encode(array('success' => true));
