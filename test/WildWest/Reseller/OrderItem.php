<?php

class WildWest_Reseller_OrderItem extends WildWest_Reseller_Element
{

    /**
     * The WWD product ID from the catalog of  the item being purchased.
     * @var integer
     */
    public $productid;

    /**
     * (Optional) The quantity of the item being purchased  (defaults to 1).
     * Must be a positive integer.
     *
     * @var integer
     */
    public $quantity;

    /**
     * (Optional) Maximum length 50. May contain any characters.
     * Optional reseller-supplied item identifier.
     *
     * If given, this value will be returned in all notification messages sent
     * to the reseller
     *
     * @var string
     */
    public $riid;

    /**
     * (Optional) Floating point value; default = 1.0
     * 
     * The duration of the purchase. This attribute is used
     * only on domainByProxy items.
     *
     * If privacy is being purchased at the same time that the domain name is
     * being registered, the duration attribute in the domainByProxy item
     * must match the period attribute in the domainRegistration node.
     * 
     * If privacy is being purchased for an already-registered domain name,
     * then use the info request to retrieve the proper value for this attribute.
     * 
     * @var float
     */
    public $duration = 1.0;

}