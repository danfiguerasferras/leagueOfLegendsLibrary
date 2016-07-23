<?php

namespace config;
/**
 * Created by PhpStorm.
 * User: blad3r
 * Date: 18/07/2016
 * Time: 19:41
 */
class configurationItems
{
    /**
     * Defined all the paths for the images
     */
    public static $PathImages = "images/";
    public static $PathGeneralImages = "images/general/";

    public static function getDirectory($resource = "")
    {
        if($resource!=""){
            return $_SERVER['DOCUMENT_ROOT'].$resource;
        }else{
            return $_SERVER['DOCUMENT_ROOT'];
        }
    }
}