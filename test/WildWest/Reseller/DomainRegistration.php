<?php

class WildWest_Reseller_DomainRegistration extends WildWest_Reseller_Element
{
    /**
     * Contains the order information.
     * @var WildWest_Reseller_OrderItem
     */
    public $order;

    /**
     * Maximum 63 characters. Second level domain name (abc of abc.com).
     * @var string
     */
    public $sld;

    /**
     * (.com, .net, .org, .us, .ws, or .info) Top level domain (com of abc.com)
     * @var string
     */
    public $tld;

    /**
     * Length of the registration, in years. Valid
     * values for most are 1-10.
     * 
     * @var integer
     */
    public $period;

    /**
     * The registrant contact. Refer to the ContactInfo type.
     * @var WildWest_Reseller_ContactInfo
     */
    public $registrant;

    /**
     * (Optional) The admin contact. Refer to the ContactInfo type.
     * @var WildWest_Reseller_ContactInfo
     */
    public $admin;

    /**
     * (Optional) The billing contact. Refer to the ContactInfo type.
     * @var GoDaddy_Resller_ContactInfo
     */
    public $billing;

    /**
     * (Optional) The tech contact. Refer to the ContactInfo type.
     * @var WildWest_Reseller_ContactInfo
     */
    public $tech;

    /**
     * (Optional) Default value is 1.
     * Supply 1 to auto-renew 0 for manual renew
     * @var integer
     */
    public $autorenewflag = 1;

    /**
     * Array of nameservers to be set.
     * @var array of WildWest_Reseller_NS
     */
    public $nsArray = array();

    /**
     * 
     * @var WildWest_Reseller_Nexus
     */
    public $nexus;
}
