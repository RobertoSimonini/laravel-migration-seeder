<?php

namespace App\Http\Controllers;

use App\Models\train;


class TrainController extends Controller
{
    public function index()
    {
        $trains = train::all();

        return view('home', compact('trains'));
    }
}
