<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use App\Category;

class FrontendController extends Controller
{
    /**
     * method untuk halaman frontend index
     * @return [type]
     */
    public function index()
    {
        $data['news'] = News::select('news.*', 'categories.category_name', 'users.name as author')
                            ->join('categories', 'categories.id', '=', 'news.category_id')
                            ->join('users', 'users.id', '=', 'news.user_id')
                            ->paginate(10);

        return view('frontend.layout_home', $data);
    }

    /**
     * method untuk halaman detail artikel
     * @return [type]
     */
    public function detail($id, $slug)
    {
        $data['news'] = News::select('news.*', 'categories.category_name', 'users.name as author')
                            ->where('news.id', $id)
                            ->join('categories', 'categories.id', '=', 'news.category_id')
                            ->join('users', 'users.id', '=', 'news.user_id')
                            ->first();

        return view('frontend.layout_detail', $data);
    }
}
