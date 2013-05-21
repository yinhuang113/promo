<?php

class WildWest_Reseller_Shopper
{
    /**
     * Either createNew or a previously returned user ID.
     * If this value is "createNew," the following non-DBP
     * properties are required. If not, then the value must be
     * a previously returned user ID and all of the following
     * attributes are ignored, even if present.
     * 
     * @var string
     */
    public $user;

    /**
     * Minimum 5 characters, maximum 20 characters.
     * Required if user="createNew." This is the password
     * that is to be assigned to the new account.
     * If "user" refers to an existing account ID, this field is
     * ignored even if present.
     * 
     * @var string
     */
    public $pwd;

    /**
     * Maximum 256 characters. A password hint
     * that is displayed to the user upon request on the Web
     * site. This field is always optional.
     * If user="createNew," this field is assigned as the password
     * hint to the new user account.
     * If this field is not present, the account will not have a
     * password hint. If user refers to an existing account ID,
     * this field is ignored if present.
     *
     * @var string
     */
    public $pwdhint;

    /**
     * Maximum 80 characters.
     * The user's email address. Must be in a valid email
     * address format. For example, a@b.c.d.com or a@b.us.
     * If user="createNew," this field is required.
     * If user refers to an existing user ID, this field is
     * ignored.
     * 
     * @var <type>
     */
    public $email;

    /**
     * Maximum 30 characters. The user's first name.
     * If user="createNew," this field is required.
     * If user refers to an existing user ID, this field is ignored.
     *
     * @var string
     */
    public $firstname;

    /**
     * Maximum 30 characters. The user's first name.
     * If user="createNew," this field is required.
     * If user refers to an existing user ID, this field is ignored.
     *
     * @var string
     */
    public $lastname;

    /**
     * Format: +[0-9]{1,3}\.[0-9]{1,12}
     * Example: +1.4805058800
     * The user's phone number. If user="createNew," this field is required.
     * If user refers to an existing user ID, this field is ignored.
     * 
     * @var string
     */
    public $phone;


    /**
     * createNew or a previously returned dbpuser ID.
     * User ID for the dbp account. If a domainByProxy item (privacy renewal)
     * is present or a resourceRenewal with productid 387001, this field is
     * required, otherwise it is ignored.
     *
     * If dbpuser="createNew", then a new dbp account is created using the
     * following 3 attributes. If its value is not "createNew", then a check
     * is made to ensure that the given dbpuser ID is valid.
     *
     * @var string
     */
    public $dbpuser;

    /**
     * Minimum 5 characters, maximum 20 characters.
     *
     * If a domainByProxy item is present in the order, this field is required,
     * otherwise it is ignored.
     * 
     * If dbpuser="createNew," this value is assigned as the password to the
     * newly created account.
     * 
     * If dbpuser refers to an existing dbpuser ID, then this value must be the
     * password of that account.
     * 
     * If the password doesn't match, the order will be rejected.
     * @var string
     */
    public $dbppwd;

    /**
     * Maximum 256 characters.
     * 
     * Password hint for the new dbp account. This field is
     * always optional.
     *
     * If a domainByProxy item is present and dbpuser="createNew," this
     * value is assigned to the new dbp account.
     *
     * If not present, the account will not have a password hint.
     *
     * If dbpuser refers to an existing account ID, this field is ignored.
     * 
     * @var string
     */
    public $dbppwdhint;

    /**
     * Maximum 80 characters.
     * 
     * Email account used to send dbp-related email to the user. Required only
     * if a domainByProxy item is present and dbpuser="createNew".
     * 
     * @var string
     */
    public $dbpemail;
}