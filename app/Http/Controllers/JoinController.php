<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function index() {
        return view('pages.landing.join-us');
    }
}
