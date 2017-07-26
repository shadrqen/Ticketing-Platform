<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JambolifeController extends Controller
{
	public function getIndex()
	{
		return view('welcome');
	}
    public function getJambolife()
    {
    	return view('jambolife');
    }
}
