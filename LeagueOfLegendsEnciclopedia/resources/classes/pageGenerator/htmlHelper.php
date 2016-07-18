<?php
namespace htmlGenerator;

use config\configurationItems;

include_once __DIR__."/resources/config/configurationItems.php";
/**
 * Created by PhpStorm.
 * User: blad3r
 * Date: 18/07/2016
 * Time: 19:54
 */
class htmlHelper
{
    /**
     *
     */
    public static function getFavicon(){
        return '<link rel="shortcut icon" href="'.configurationItems::$PathGeneralImages.'favicon.ico" type="image/x-icon"/>';
    }
}