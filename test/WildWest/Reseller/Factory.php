<?php

class WildWest_Reseller_Factory
{
    /**
     * @var string
     */
    protected static $_defaultWsdl;

    /**
     * @var string
     */
    protected static $_defaultAccount;

    /**
     * @var string
     */
    protected static $_defaultPassword;

    /**
     * Protected Constructor to Prohibit Instantiation
     */
    protected function __construct() {}

    /**
     * Sets the default wsdl to be used
     * @param string $wsdl
     */
    public static function setDefaultWsdl($wsdl)
    {
        self::$_defaultWsdl = $wsdl;
    }

    /**
     * Returns the the default wsdl
     * @return string
     */
    public static function getDefaultWsdl()
    {
        return self::$_defaultWsdl;
    }

    /**
     * Sets the default account
     * @param string $account
     */
    public static function setDefaultAccount($account)
    {
        self::$_defaultAccount = $account;
    }

    /**
     * Gets the default account
     * @return string
     */
    public static function getDefaultAccount()
    {
        return self::$_defaultAccount;
    }

    /**
     * Sets a default password for building a new
     * @param string $password
     */
    public static function setDefaultPassword($password)
    {
        self::$_defaultPassword = $password;
    }

    /**
     * Gets the default password
     * @return string
     */
    public static function getDefaultPassword()
    {
        return self::$_defaultPassword;
    }

    /**
     * Creates a new WildWest_Reseller_Client object
     *
     * @param string $wsdl
     * @param string $account
     * @param string $password
     */
    public static function build($wsdl = null, $account = null, $password = null)
    {
        $wsdl     = empty($wsdl) ? self::getDefaultWsdl() : $wsdl;
        $account  = empty($account) ? self::getDefaultAccount() : $account;
        $password = empty($password) ? self::getDefaultPassword() : $password;

        return new WildWest_Reseller_Client($wsdl, $account, $password);
    }
}


