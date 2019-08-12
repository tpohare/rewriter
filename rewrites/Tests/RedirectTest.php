<?php 

namespace Rewrites\Test;

use Tests\TestCase;
use Rewrites\Rules\Redirect;

class RedirectTest extends TestCase {
    function testInit() {
        $redirect = new Redirect();

        $this -> assertNull($redirect -> from);
        $this -> assertNull($redirect -> to);
        $this -> assertNull($redirect -> response_code);
    }

    function testInitWithData() {
        $data = [
            "from" => "/pagename.php", 
            "to" => "http://www.domain.com/pagename.html", 
            "response_code" => 302
        ];
        $redirect = new Redirect($data);

        $this -> assertEquals($redirect -> from, "/pagename.php");
        $this -> assertEquals($redirect -> to, "http://www.domain.com/pagename.html");
        $this -> assertEquals($redirect -> response_code, 302);
    }
}