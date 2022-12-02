<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function dummy(Request $request)
    {
        if ($request->ajax()){
           $model =  User::all();
           $th = ['Name','Email'];
           $td = ['email','email'];
           $actionBtn = true;
           return view('components.dataTable',compact('model','th','td','actionBtn'));
        }
        $users =  User::all();

        // dd($users);
        return view('example.pages.custom-pages.dummy',compact('users'));

    }
}
