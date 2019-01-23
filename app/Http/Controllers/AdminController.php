<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function _construct()
    {
    	$this->middleware('IsAmin');
    }

    public function index(){

    	return "admin ka";
    }
}
