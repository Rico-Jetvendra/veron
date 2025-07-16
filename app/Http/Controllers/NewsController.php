<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $news = DB::table('t_news')->get();

        return view('pages/admin/news/index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('pages/admin/news/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $filename = '';
        $validated = $request->validate([
            'news_title'  => 'required',
            'news_tag'  => 'required',
            'news_content'  => 'required',
            'news_thumbnail' => 'required|file|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('news_thumbnail')) {
            $file = $request->file('news_thumbnail');
            $filename = time().'_'.$file->getClientOriginalName();
            $path = $file->storeAs('thumbnail', $filename, 'public');
        }

        // // Save to database
        $news = News::create([
            'news_title' => $validated['news_title'],
            'news_tag' => $validated['news_tag'],
            'news_content' => $validated['news_content'],
            'news_thumbnail' => $filename,
            'news_date' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news){
        $news = DB::table('t_news')->where('news_id', '=', $news->news_id)->get()[0];

        return view('pages/admin/news/edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news){
        date_default_timezone_set('Asia/Jakarta');

        $news = DB::table('t_news')->where('news_id', '=', $news->news_id)->get()[0];
        $filename = $news->news_thumbnail;

        $validated = $request->validate([
            'news_title'  => 'required',
            'news_tag'  => 'required',
            'news_content'  => 'required'
        ]);

        if ($request->hasFile('news_thumbnail')) {
            $file = $request->file('news_thumbnail');
            $filename = time().'_'.$file->getClientOriginalName();
            $path = $file->storeAs('thumbnail', $filename, 'public');
        }

        // Save to database
        $news = News::where('news_id', $news->news_id)->update([
            'news_title' => $validated['news_title'],
            'news_tag' => $validated['news_tag'],
            'news_content' => $validated['news_content'],
            'news_thumbnail' => $filename,
            'news_date' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news){
        $news = News::findOrFail($news->news_id);
        $news->delete();
    }
}
