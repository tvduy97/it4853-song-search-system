<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function searchBasic()
    {
        return view('basic_search');
    }
    public function searchAdvance()
    {
        return view('advanced_search');
    }
    public function getBasicResult()
    {
    	return view('basic_result');
    }
    public function getAdvancedResult()
    {
    	return view('advanced_result');
    }
}
