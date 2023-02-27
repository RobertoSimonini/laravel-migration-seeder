<?php

namespace App\Http\Controllers;

use App\Models\train;


class TrainController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
