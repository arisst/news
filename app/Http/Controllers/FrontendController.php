<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontendController extends Controller
{
    /**
     * method untuk halaman frontend index
     * @return [type]
     */
    public function index()
    {
        // sampel data
        $data['news'] = [
            [
                'id'        => 1233,
                'slug'      => 'berita-lorem-ipsum',
                'title'     => 'Lorem ipsum dolor sit amet',
                'resume'    => 'There are many vaiations of passages of Lorem Ipsum avaibleThere are many vaiations of passages of Lorem Ipsum',
                'date'      => '2016-08-07 23:47:00',
                'category'  => 'Entertainment',
                'image'     => 'http://localhost:8000/template/placeholders/244x117/244x117-8.jpg',
                'author'    => 'Admin',
            ],
            [
                'id'        => 1232,
                'slug'      => 'berita-lorem-ipsum',
                'title'     => 'Lorem ipsum dolor sit amet',
                'resume'    => 'There are many vaiations of passages of Lorem Ipsum avaibleThere are many vaiations of passages of Lorem Ipsum',
                'date'      => '2016-08-06 22:47:00',
                'category'  => 'Sport',
                'image'     => 'http://localhost:8000/template/placeholders/244x117/244x117-2.jpg',
                'author'    => 'Aris',
            ],
            [
                'id'        => 1231,
                'slug'      => 'berita-lorem-ipsum',
                'title'     => 'Lorem ipsum dolor sit amet',
                'resume'    => 'There are many vaiations of passages of Lorem Ipsum avaibleThere are many vaiations of passages of Lorem Ipsum',
                'date'      => '2016-08-05 20:47:00',
                'category'  => 'News',
                'image'     => 'http://localhost:8000/template/placeholders/244x117/244x117-3.jpg',
                'author'    => 'Admin',
            ],
        ];

        return view('frontend.layout_home', $data);
    }

    /**
     * method untuk halaman detail artikel
     * @return [type]
     */
    public function detail()
    {
        return view('frontend.layout_detail');
    }
}
