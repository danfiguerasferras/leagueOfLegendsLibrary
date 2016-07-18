<?php
/**
 * Created by PhpStorm.
 * User: blad3r
 * Date: 12/07/2016
 * Time: 19:16
 */
// TODO fight with this ****
echo realpath(__DIR__."resources/connection/LeagueOfLegendsAPI.php"); die();
include_once __DIR__."resources/connection/LeagueOfLegendsAPI.php";
include_once __DIR__."resources/classes/pageGenerator/htmlHelper.php";


echo "Hello world!<br /><br />";

echo \htmlGenerator\htmlHelper::getFavicon();

//var_dump(\config\config::getChampionList());
