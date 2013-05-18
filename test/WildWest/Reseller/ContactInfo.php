<?php

class WildWest_Reseller_ContactInfo extends WildWest_Reseller_Element
{
    /**
     * Maximum 30 characters. Contact's first name.
     * Not required if "org" has a value.
     * @var string
     */
    public $fname;

    /**
     * Maximum 50 characters. Contact's last name.
     * Not required if "org" has a value.
     * @var string
     */
    public $lname;

    /**
     * Name of the organization.
     * This may be given in place of fname, lname.
     * @var string
     */
    public $org;

    /**
     * Must be in a valid email address format.
     * For example, a@b.c.d.com or a@b.us.
     * @var string
     */
    public $email;

    /**
     * Street address. Maximum 30 characters.
     * Pattern: ^[a-zA-Z0-9 #&'()+,-./:;@[\]]+
     * @var string
     */
    public $sa1;

    /**
     * (Optional) Street address 2. Maximum 30 characters.
     * Pattern: ^[a-zA-Z0-9 #&'()+,-./:;@[\]]+
     * @var string
     */
    public $sa2;

    /**
     * Maximum 30 characters. City of residence.
     * @var string
     */
    public $city;

    /**
     * Maximum 30 characters. State or province.
     * Required if cc="United States" or cc="Canada," must
     * be valid state or province name (full name).
     * @var string
     */
    public $sp;

    /**
     * Postal code. Maximum length 10 characters.
     * Pattern: ^[a-zA-Z0-9 #&'()+,-./:;@[\]]+$
     * @var string
     */
    public $pc;

    /**
     * Country of residence.
     * Must match one of the entries in the Countries table (spelled out name).
     * 
     * @var string
     */
    public $cc;

    /**
     * Phone number. Format: +[0-9]{1,3}\.[0-9]{1,12}
     * Example: +1.4805058800
     * 
     * @var string
     */
    public $phone;

    /**
     * (Optional) Fax number. Format: +[0-9]{1,3}\.[0-9]{1,12}
     * Example: +1.4805058800
     * 
     * @var string
     */
    public $fax;
    
}