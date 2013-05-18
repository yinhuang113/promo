<?php
require_once realpath(dirname(__FILE__) . '/Element.php');
class WildWest_Reseller_Credential extends WildWest_Reseller_Element
{
    /**
     * @var string
     */
    public $Account;

    /**
     * @var string
     */
    public $Password;
}