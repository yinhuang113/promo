<?php

set_include_path(
    get_include_path() . PATH_SEPARATOR .
    realpath(dirname(__FILE__) . '/../../library')
);

session_start();

function __autoload($class) 
{
    require_once str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
}

