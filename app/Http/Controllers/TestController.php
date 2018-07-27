<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $ppt = new PPTClass();
        $template = 'C:\Users\dangbing.MI\Desktop\img\template.pptx';
        $save_path = 'C:\Users\dangbing.MI\Desktop\img\\';
        $name = '报告yes.pptx';
        $ppt->intercepringImg()->creatPPT($template, $save_path, $name);
    }
}