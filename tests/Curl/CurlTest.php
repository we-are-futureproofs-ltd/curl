<?php

namespace Tests\Curl;

use \Curl\Curl;

class CurlTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {

    }

    public function testConstruct()
    {
        $curl = new Curl();
    }
}