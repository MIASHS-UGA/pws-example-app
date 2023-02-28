<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function home() {
        $tasks = [
            'Aller faire les courses',
            'Aller à la gym',
            'Dormir'
        ];
        return view('home',[
            'tasks' => $tasks,
            'test' => request('title')
        ]);
    }
    function contact(){
        return view('contact');
    }
}
