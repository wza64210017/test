<?php

namespace Packages\Test;

use GuzzleHttp\Client;

class TestController
{
    public function index()
    {
        $client = new Client();
        dd($client->get("www.baidu.com"));
    }
}
