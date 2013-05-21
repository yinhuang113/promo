<?php

require_once dirname(__FILE__) . '/common.php';

$client = new WildWest_Reseller_Client(
    WildWest_Reseller_Client::WSDL_OTE_TESTING, 
    $_SESSION['account'], $_SESSION['pass']
);

if (empty($_SESSION['complete'][1])) {
    echo json_encode(array('success' => false, 'message' => 'Complete Step #1 first'));
    exit();
}

$ns1 = new WildWest_Reseller_NS();
$ns1->name = 'ns1.example.com';

$ns2 = new WildWest_Reseller_NS();
$ns2->name = 'ns2.example.com';

$order = new WildWest_Reseller_OrderItem();
$order->productid = '350077';
$order->quantity  = '1';

$order2 = new WildWest_Reseller_OrderItem();
$order2->productid = '350127';
$order2->quantity  = '1';

$r = new WildWest_Reseller_ContactInfo();
$r->fname = 'Artemus';
$r->lname = 'Gordon';
$r->email = 'agordon@wildwestdomains.com';
$r->sa1   = '2 N. Main St.';
$r->city  = 'Valdosta';
$r->sp    = 'Georgia';
$r->phone = '+1.8885551212';
$r->pc    = '17123';
$r->cc    = 'United States';

$registration             = new WildWest_Reseller_DomainRegistration();
$registration->order      = clone $order;
$registration->registrant = clone $r;
$registration->admin      = clone $r;
$registration->tech       = clone $r;
$registration->billing    = clone $r;
$registration->period     = '2';
$registration->sld        = 'example';
$registration->tld        = 'biz';
$registration->nsArray    = array($ns1, $ns2);
$registration->autorenewflag = 1;

$nexus = new WildWest_Reseller_Nexus();
$nexus->County   = 'US';
$nexus->category = 'citizen of US';
$nexus->use      = 'personal';

$registration2 = new WildWest_Reseller_DomainRegistration();
$registration2->order      = $order2;
$registration2->registrant = clone $r;
$registration2->admin      = clone $r;
$registration2->tech       = clone $r;
$registration2->billing    = clone $r;
$registration2->period     = '2';
$registration2->sld        = 'example';
$registration2->tld        = 'us';
$registration2->nexus      = $nexus;
$registration2->nsArray    = array(clone $ns1, clone $ns2);
$registration2->autorenewflag = 1;

$shopper = new WildWest_Reseller_Shopper();
$shopper->firstname = 'Artemus';
$shopper->lastname  = 'Gordon';
$shopper->email     = 'agordon@wildwestdomains.com';
$shopper->user      = 'createNew';
$shopper->pwd       = 'abcde';
$shopper->phone     = '+18885551212';

$details = $client->OrderDomains($shopper, array($registration, $registration2));

$_SESSION['userid']  = $details['user'];
$_SESSION['orderid'] = $details['orderid'];

$messages = $client->Poll();
$_SESSION['resources']['example.biz'] = $messages[0]['resourceid'];
$_SESSION['resources']['example.us'] = $messages[1]['resourceid'];

$_SESSION['complete'][2] = true;
echo json_encode(array('success' => true));
