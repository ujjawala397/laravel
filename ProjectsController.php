<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //
    public function courses()
    {
    	$project=new \App\projects;
    	$list=$project::all();
    	return view('projects',compact('list'));
    }
}
