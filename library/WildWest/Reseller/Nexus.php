<?php

class WildWest_Reseller_Nexus extends WildWest_Reseller_Element
{
    /**
     * Select the value that best describes the prospective owner of the domain.
     * 
     * Valid Values:
     * -----------------
     * citizen of US
     * permanent resident of US
     * primary domicile in US
     * incorporated or organized in US
     * foreign entity doing business in US
     * foreign entity with office or property in US
     *
     * @var string
     */
    public $category;

    /**
     * Select the value that best describes the use for this domain.
     * Valid Values:
     * ------------------
     * personal
     * business use for profit
     * non-profit business or organization
     * educational purposes
     * government purposes
     * 
     * @var string
     */
    public $use;

    /**
     * If category is one of the foreign entity values, then the
     * two-letter country code for the owner's home country must be provided.
     * 
     * @var string
     */
    public $County;
}