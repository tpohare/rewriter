<?php

namespace Rewrites\Rules;

class Redirect {
    public $from;
    public $to;
    public $response_code;

    public function __construct($rule = []) {
        $this -> from = $rule["from"] ?? null;
        $this -> to = $rule["to"] ?? null;
        $this -> response_code = $rule["response_code"] ?? null;
    }
}