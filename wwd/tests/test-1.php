<?php

require_once dirname(__FILE__) . '/common.php';

$client = new WildWest_Reseller_Client(
    WildWest_Reseller_Client::WSDL_OTE_TESTING, 
    $_SESSION['account'], $_SESSION['pass']
);

$client->CheckAvailability(array('example.biz', 'example.us'));

$_SESSION['complete'][1] = true;
echo json_encode(array('success' => true));

