<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class move-on extends Controller
{
    public function index()
    {
        return view ('welcome');
    }
    public function register()
    {
        return view ('register');
    }
    public function log-in()
    {
        return view ('log-in');
    }
    public function user()
    {
        return view ('user');
    }
    public function delete()
    {
        return view ('delete');
    }

}