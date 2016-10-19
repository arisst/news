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
        return view('frontend.layout_home');
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
