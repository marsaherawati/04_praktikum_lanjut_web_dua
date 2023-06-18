<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function show($id)
    {
        $news = [
            [
                'id' => 1,
                'title' => 'Berita 1',
                'created_at' => '2022-01-01 10:00:00',
                'isi' => 'Ferdy Sambo'
            ],
            [
                'id' => 2,
                'title' => 'Berita 2',
                'created_at' => '2022-01-02 11:00:00',
                'isi' => 'Dirjen Pajak'
            ],
            [
                'id' => 3,
                'title' => 'Berita 3',
                'created_at' => '2022-01-03 12:00:00',
                'isi' => 'Tsunami Thropy'
            ]
        ];

        return view('news', compact('news'));   
    }

}
