<?php

namespace config;

/**
 * Created by PhpStorm.
 * User: blad3r
 * Date: 11/07/2016
 * Time: 18:50
 */
class config
{
    private static $leagueOfLegendsAPIKey = "RGAPI-63AA8D59-2A45-4846-8BE7-DC7E876A4630";
    private static $regions = array("br", "eune", "euw", "jp", "kr", "lan", "las", "na", "oce", "pbe", "ru", "tr");
    private static $defaultRegionIndex = 3;
    private static $languagesAvailable = array("en_US", "es_ES");
    private static $defaultLanguageIndex = 1; // using the array above, that means English (en_US)
    private static $informationDetail = array(
        "all",              // Absolutely all information about league champs, takes a lot to load.
        "allytips",         // Tips for allied players
        "altimages",        // Title of the champion
        "blurb",            // Description of the champion
        "enemytips",        // Tips for the enemy team
        //TODO complete the list
        // ...
        "tags"              // Tags for the champion (type: Fighter, Support, Assassin, etc.)
    );


    public /**
     * @return int
     */
    static function getDefaultLanguageIndex()
    {
        return self::$defaultLanguageIndex;
    }

    public /**
     * @return array
     */
    static function getLanguagesAvailable()
    {
        return self::$languagesAvailable;
    }

    public /**
     * @return string
     */
    static function getLeagueOfLegendsAPIKey()
    {
        return self::$leagueOfLegendsAPIKey;
    }

    public /**
     * @return string
     */
    static function getRegions()
    {
        return self::$regions;
    }

    /**
     * @param string $parametersToGet
     * @return string
     */
    static function getChampionListURL($parametersToGet = "tags")
    {
        return "https://global.api.pvp.net/api/lol/static-data/" . self::$regions[self::$defaultRegionIndex] .
        "/v1.2/champion?locale=" . self::$languagesAvailable[self::$defaultLanguageIndex] .
        "&champData=" . $parametersToGet . "&api_key=" . self::$leagueOfLegendsAPIKey;
    }

    static function callAPI($url = "")
    {
        $response = "";
        if ($url != "" && $url != false && $url != null) {
            try {
                $response = file_get_contents($url);
            } catch (\Exception $e) {
                error_log("Exception cached when tryig to get content from URL: " . $e->getMessage());
            }
        } else {
            error_log("The URL was empty");
        }
        return $response;
    }

    /******************************
     *  Calls to the LoL methods  *
     ******************************/

    static function getChampionList()
    {
        $urlToCall = self::getChampionListURL("tags");
        error_log("The call was to the URL: " . $urlToCall);
        $res = self::callAPI($urlToCall);
        return json_decode($res);
    }

}