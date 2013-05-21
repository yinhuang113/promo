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

$contactinfor = new WildWest_Reseller_ContactInfo();
$contactinfor->fname = "Brad";
$contactinfor->lname = "OTEReseller";
$contactinfor->org = "Wild West Reseller";
$contactinfor->email = "info@world-link-llc.com";
$contactinfor->sa1 = "14455 North";
$contactinfor->sa2 = "Hayden Road";
$contactinfor->city = "Scottsdale";
$contactinfor->sp = "Arizona";
$contactinfor->pc = "85260";
$contactinfor->cc = "United States";
$contactinfor->phone = "4805058800";
$contactinfor->fax = "4805058800";


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
$reg->registrant = $contactinfor;
$reg->admin = $contactinfor;
$reg->billing = $contactinfor;
$reg->tech = $contactinfor;
$reg->period = 2;

$items[]=$reg;

$items[] =  $orderItem;
var_dump($items);
var_dump($shopper);
//exit;*/
$result = $client->OrderDomains($shopper,$items);
//$result = $client->Poll();
var_dump($result);
 ?>
