<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index(){
        if(View::exists('pages.index'))
            return view('pages.index')
                ->with(['name'=>'Aima','duit'=>'money']);
        else
            return 'No view available';    
    }

    public function blade()
    {
        return view('blade.bladetest');
    }
}
