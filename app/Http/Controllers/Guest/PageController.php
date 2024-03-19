<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $greeting = 'Hello World';

        $data = [
            [
                'name' => 'Fabio'
            ],
            [
                'name' => 'Mario'
            ],
            [
                'name' => 'Sara'
            ],
            [
                'name' => 'Alex'
            ],
        ];

        return view('pages.home', compact('greeting', 'data'));
    }
}
