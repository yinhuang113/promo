<?php

class WildWest_Reseller_DomainTransfer extends WildWest_Reseller_Element
{
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
     * (Optional) Used by some registries as a means of validating
     * transfer requests. Specifically, .us, .biz and .info
     * @var string
     */
    public $authInfo;

    /**
     * Associated Order Information
     * @var WildWest_Reseller_Order
     */
    public $order;
}