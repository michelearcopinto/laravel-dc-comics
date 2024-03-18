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

    public function index_about()
    {

        $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto aut excepturi deleniti cupiditate deserunt sint reprehenderit quibusdam tempore voluptas quis, nisi id voluptatibus quaerat repellat doloremque eum eos laborum eaque.';


        return view('pages.about', compact('lorem'));
    }
}
