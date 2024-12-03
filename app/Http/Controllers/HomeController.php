<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\UserNew;


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
        // echo "<pre>";
        // print_r($request->input());

        $user = new UserNew;
        $user->name = 'Abhi';
        $user->email = $request->input('userEmail');
        $user->password = Hash::make($request->input('userPass'));
        $user->save();
        return redirect()->route('login')->with('success', 'Data saved successfully');
    }
    public function getDBData(){
        // $data = DB::table('users')->get();
        $data = DB::select('SELECT * FROM users');
        return response()->json(
            ['message' => 'Data found', 'data' => $data],
            200
        );
        // return view('home/getDBData', ["data" => $data]);
    }

}
