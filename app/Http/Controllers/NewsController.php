<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\NewsRequest;
use App\News;
use App\Category;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::select('news.*', 'categories.category_name', 'users.name as author')
                            ->join('categories', 'categories.id', '=', 'news.category_id')
                            ->join('users', 'users.id', '=', 'news.user_id')
                            ->paginate(10);
        return view('news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::all();
        return view('news.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        //file handler
	    $file = $request->file('image');
        if($file){
    	    $filename = md5($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
    	    $file->move('files', $filename);
            $urlimage = asset('files/'.$filename);
        }else{
            $urlimage = '';
        }

        $db = new News;

        $db->title       = $request->title;
        $db->slug        = str_slug($request->title);
        $db->resume      = $request->resume;
        $db->content     = $request->content;
        $db->image       = $urlimage;
        $db->category_id = $request->category_id;
        $db->user_id     = \Auth::id();

        $db->save();

        return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['edit']       = News::find($id);
        $data['category']   = Category::all();
        return view('news.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $db = News::find($id);

        //file handler
	    $file = $request->file('image');
        if($file){
    	    $filename = md5($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
    	    $file->move('files', $filename);
            $urlimage = asset('files/'.$filename);
            $db->image   = $urlimage;
        }

        $db->title       = $request->title;
        $db->slug        = str_slug($request->title);
        $db->resume      = $request->resume;
        $db->content     = $request->content;
        $db->category_id = $request->category_id;
        $db->user_id     = \Auth::id();

        $db->save();

        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return redirect()->back();
    }
}
