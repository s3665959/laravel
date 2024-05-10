<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $blogs=[
            [
                'title'=>"title 1",
                'content'=>"content 1",
                'status'=> true
            ],
            [
                'title'=>"title 2",
                'content'=>"content 2",
                'status'=> false
            ],
            [
                'title'=>"title 3",
                'content'=>"content 3",
                'status'=> true
            ]
    
        ];
     
        return view('blog',compact('blogs'));

    }

    function about(){
        $name="Nakarin";
    $date="10 April 2024";
    $country="Thailand";
    return view('about',compact('name', 'date', 'country'));
    }

    function create(){
        return view('form');
    }
}
