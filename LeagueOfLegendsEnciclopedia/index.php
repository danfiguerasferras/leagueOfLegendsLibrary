<?php
/**
 * Created by PhpStorm.
 * User: blad3r
 * Date: 12/07/2016
 * Time: 19:16
 */

include_once $_SERVER['DOCUMENT_ROOT']."resources/config/configurationItems.php";
include_once \config\configurationItems::getDirectory("resources/connection/LeagueOfLegendsApi.php");
include_once \config\configurationItems::getDirectory("resources/pageItems/pageGenerator/htmlHelper.php");

use connection\LeagueOfLegendsAPI;
use htmlGenerator\htmlHelper;
//use connection\LeagueOfLegendsAPI;

// TODO fight with this ****
echo "test     <br/>";



echo "Hello world!<br /><br />";

echo htmlHelper::getFavicon();

var_dump(LeagueOfLegendsAPI::getChampionList());
