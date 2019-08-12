<?php 

namespace Rewrites\Test;

use Tests\TestCase;
use Rewrites\Platforms\Apache;

class ApacheTest extends TestCase {
    public function testBasicApacheSetup()
    {
        $apache = new Apache();
        $file_name = $apache -> file_name;
        $expected = ".htaccess";

        $this -> assertEquals($expected, $file_name);
    }
}