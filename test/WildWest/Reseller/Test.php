<?php
require_once realpath(dirname(__FILE__) . '/Client.php');

$client = new WildWest_Reseller_Client('https://api.ote.wildwestdomains.com/wswwdapi/wapi.asmx?WSDL', '816376' ,'veZa3HE7');
$shopper = new WildWest_Reseller_Shopper();
$shopper->acceptOrderTOS ='';
$shopper->user ='816376';
$shopper->pwd ='veZa3HE7';
$shopper->firstname ='Brad';
$shopper->lastname ='OTEReseller';
$shopper->phone ='4805058800';

$contactinfor = new WildWest_Reseller_ContactInfo();
$contactinfor->fname = "Artemus";
$contactinfor->lname = "Gordon";
$contactinfor->eamil = "agordon@wildwestdomains.com";
$contactinfor->address = "2 N. Main St.";
$contactinfor->city = "Valdosta";
$contactinfor->state = "Georgia";
$contactinfor->zip = "17123";
$contactinfor->country = "USA";
$contactinfor->phone = "555-1212";

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
$reg->registrant = registrant;
$reg->admin = registrant;
$reg->billing = registrant;
$reg->tech = registrant;
$reg->period = 2;

$items[]=$reg;

$items[] =  $orderItem;

$result = $client->OrderDomains($shopper,$items);
echo $result;
 ?>
