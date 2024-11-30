<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Welcome to my website',
            'message' => 'This is my first Laravel project',
            'name' => 'John Doe'
        );
        return view('home/index', ["data" => $data]);
    }

    public function login()
    {
        return view('home/login');
    }

    function formView()
    {
        return view('home/formView');
    }

    function saveForm(Request $request)
    {
        $request->validate([
                'userEmail' => 'required|email',
                'userPass' => 'required|min:5'
            ]
        );
        echo "<pre>";
        print_r($request->input());
    }

}
