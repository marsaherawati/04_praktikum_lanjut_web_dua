<?php

namespace App\Http\Controllers;

class ProgramController extends Controller
{
    public function show()
    {
        $programs = [
            [
                'id' => 1,
                'name' => 'Program 1',
                'description' => 'Deskripsi Program 1',
            ],
            [
                'id' => 2,
                'name' => 'Program 2',
                'description' => 'Deskripsi Program 2',
            ],
            [
                'id' => 3,
                'name' => 'Program 3',
                'description' => 'Deskripsi Program 3',
            ]
        ];

        return view('program', compact('programs'));
    }

    public function index()
    {
        return view('program');
    }
}
