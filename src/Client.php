<?php

namespace aoxSpider;

use Requests;

class Client
{
    public $request;
    public $domain;
    public $urlList;
    public $headers;
    public $options;
    public $error = "";
    public $errorNo = "";
    public $errorInfo = [];

    public function __construct($domain)
    {
        $this->domain = $domain;
        Requests::register_autoloader();
        $this->request = new \Requests_Session();
        $this->urlList = array(
            'getTopCategory'        => "/index/category/getTopCategory",
            
        );
        $this->headers = array(
            //"Content-Type" => "application/json",
        );
        $this->options = array();
    }

    public function start()
    {
        return $this->getProduct('45952');
    }

    

}