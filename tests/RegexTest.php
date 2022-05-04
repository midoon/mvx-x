<?php

namespace Harun\MvcDasar\Tests;

class RegexTest{
    public static function testRegex(){
        $path = "/products/12345/categories/abcde";
        $pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";
        
        $result = preg_match($pattern, $path, $valiables);
        var_dump($valiables);
    }
}

RegexTest::testRegex();