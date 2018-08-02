<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $pattern = '/.+\./';
        $subject = __FILE__;
        dd(preg_replace($pattern,'',$subject),preg_quote($pattern));
        $res = preg_match($pattern,$subject,$arr);
        dd($res,$arr);
        
    }
}