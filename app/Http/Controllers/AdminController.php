<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index($id)
    {
        // dd(view()->exists('admin.'.$id),$id);
        if(view()->exists('admin.'.$id)){
            return view('admin.'.$id);
        }
        else
        {
            return view('admin.'.'404');
        }

     //   return view($id);
    }}
