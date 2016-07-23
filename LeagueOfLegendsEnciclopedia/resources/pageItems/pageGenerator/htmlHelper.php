<?php
namespace htmlGenerator;

include_once $_SERVER['DOCUMENT_ROOT']."resources/pageItems/pageGenerator/htmlHelper.php";
use config\configurationItems;

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
        return '<link rel="shortcut icon" href="'.configurationItems::getDirectory(configurationItems::$PathGeneralImages).'favicon.ico" type="image/x-icon"/>';
    }
}