<?php


namespace Pedrof\Http;


/**
 * Class Http
 * @package Pedrof\Http
 */
abstract class Http
{
    /**
     * @var
     */
    protected $url;
    /**
     * @var
     */
    protected $method;

    /**
     * @var string[]
     */
    protected $methods = [
        "GET",
        "POST"
    ];
    /**
     * @var
     */
    protected $headers;
    /**
     * @var
     */
    protected $params;

}