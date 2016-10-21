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
    public function detail($id, $slug)
    {
        $data['news'] = [
            'id'    => $id,
            'slug'  => $slug,
            'title'     => 'Lorem ipsum dolor sit amet',
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'date'      => '2016-08-06 22:47:00',
            'category'  => 'Sport',
            'image'     => 'http://localhost:8000/template/placeholders/slider/slide-1.jpg',
            'author'    => 'Aris',
        ];
        return view('frontend.layout_detail', $data);
    }
}
