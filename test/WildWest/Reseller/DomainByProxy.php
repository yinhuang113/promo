<?php

class WildWest_Reseller_DomainByProxy extends WildWest_Reseller_Element
{
    /**
     * Second Level Domain
     * Maximum of 63 characters
     * 
     * @var string
     */
    public $sld;

    /**
     * Top Level Domain
     * 
     * @var string
     */
    public $tld;

    /**
     * The resource ID returned in a previous notification message
     * associated with the original order for the domain name being renewed.
     * 
     * @var string
     */
    public $resourceid;

    /**
     * Attached Order
     * @var WildWest_Reseller_OrderItem
     */
    public $order;
}