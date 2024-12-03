<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    public function index(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die();
        return $request->file('abc')->store('public');
        if ($request->hasFile('abc')) {

            return $request->file('abc')->store('public');

        } else {
            return "No file selected";
        }
    }
    //
}
