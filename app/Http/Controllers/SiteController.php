<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('logs');
    }

    public function logs(){
        if(auth()->check()){
            $logs = auth()->user()->logs;
            return view('logs', compact('logs'));
        }else{
            return redirect('/logs');
        }
    }
}
