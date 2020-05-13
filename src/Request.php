<?php


namespace Pedrof\Http;


use Exception;

/**
 * Class Request
 * @package Pedrof\Http
 */
class Request
{
    private static $url;
    private static $method;

    private static $methods = [
        "GET",
        "POST"
    ];

    private static $headers;
    private static $params;

    public static function new(String $url, String $method)
    {

        if (!in_array($method, self::$methods))
        {
            throw new Exception("Method is not avaliable!");
            die();
        }

        self::$url = $url;
        self::$method = $method;
    }

    public static function options(Array $headers = null, Array $params = null)
    {
        self::$headers = $headers;
        self::$params = $params;
    }

    public static function send()
    {
        $ch = curl_init(self::$url);

        curl_setopt($ch, CURLOPT_URL, self::$url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        return curl_exec($ch);

    }

}