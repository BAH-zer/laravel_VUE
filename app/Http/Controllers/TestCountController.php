<?php

namespace App\Http\Controllers;

use App\Test_counter;
use Illuminate\Http\Request;

class TestCountController extends Controller
{
    //
	public function increase($post)
	{
		$test_counter= new Test_counter();
		return  $test_counter->increase($post);
	}


	public function increasing($post)
	{
		$test_counter= new Test_counter();
		$test_counter->increasing();
	}

}
