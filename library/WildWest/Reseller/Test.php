<?php
require_once realpath(dirname(__FILE__) . '/Client.php');
require_once realpath(dirname(__FILE__) . '/Shopper.php');
require_once realpath(dirname(__FILE__) . '/ContactInfo.php');
require_once realpath(dirname(__FILE__) . '/DomainRegistration.php');
require_once realpath(dirname(__FILE__) . '/OrderItem.php');

$client = new WildWest_Reseller_Client('https://api.ote.wildwestdomains.com/wswwdapi/wapi.asmx?WSDL', '816376' ,'veZa3HE7');
$shopper = new WildWest_Reseller_Shopper();
$shopper->acceptOrderTOS ='';
$shopper->user ='816376';
$shopper->pwd ='veZa3HE7';
$shopper->firstname ='Brad';
$shopper->lastname ='OTEReseller';
$shopper->phone ='4805058800';

$contactinfor = new WildWest_Reseller_ContactInfo();
$contactinfor->fname = "Brad";
$contactinfor->lname = "OTEReseller";
$contactinfor->email = "info@world-link-llc.com";
$contactinfor->sa1 = "14455 North Hayden Road";
$contactinfor->sa2 = "";
$contactinfor->pc = "85260";
$contactinfor->cc = "United States";
$contactinfor->phone = "4805058800";
$contactinfor->city = "Scottsdale";
$contactinfor->fax = "";


$items = array ();
$reg = new WildWest_Reseller_DomainRegistration();
$orderItem = new WildWest_Reseller_OrderItem();
$orderItem->productid= 32000;
$orderItem->quantity= 1;
$orderItem->riid= "1";
$orderItem->duration = 2;

$reg->order = $orderItem;

$reg->sld = "example";
$reg->tld = "us";
$reg->period = 2;
$reg->registrant = 'registrant';
$reg->admin = 'registrant';
$reg->billing = 'registrant';
$reg->tech = 'registrant';
$reg->period = 2;
$reg->registrant = $contactinfor;

$items[]=$reg;

$items[] =  $orderItem;
/*var_dump($items);
var_dump($shopper);
//exit;*/
$result = $client->OrderDomains($shopper,$items);
//$result = $client->Poll();
var_dump($result);
 ?>
