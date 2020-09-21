<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function postEducation(Request $request){
    	dd($request->all())
    }
}
