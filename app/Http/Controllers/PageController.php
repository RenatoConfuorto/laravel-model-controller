<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data = [
            'movies' => Movie::all(),
        ];
        dd($data['movies']);
        return view('home', $data);
    }
}
