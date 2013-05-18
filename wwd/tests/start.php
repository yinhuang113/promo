<?php

require_once realpath(dirname(__FILE__) . '/common.php');

session_destroy();
session_start();

if (empty($_REQUEST['account']) || empty($_REQUEST['pass'])) {
    echo json_encode(array('success' => false, 'message' => 'missing credentials.'));
    exit();
}

$client = new WildWest_Reseller_Client(
    WildWest_Reseller_Client::WSDL_OTE_TESTING, 
    $_REQUEST['account'], $_REQUEST['pass']
);

$_SESSION['account'] = $_REQUEST['account'];
$_SESSION['pass']    = $_REQUEST['pass'];

try {
    $client->RestartCertification();
    echo json_encode(array('success' => true));
} catch (Exception $ex) {
    echo json_encode(array('success' => false, "message" => $ex->getMessage()));
}

unset($_SESSION['complete']);




