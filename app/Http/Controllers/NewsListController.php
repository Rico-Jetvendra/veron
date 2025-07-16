<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NewsListController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $news = DB::table('t_news')->orderBy('news_date', 'desc')->paginate(2);

        return view('pages/newslist/index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsList  $newsList
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $news = DB::table('t_news')->where('news_id','=',$id)->get()[0];

        return view('pages/newslist/detail', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsList  $newsList
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsList $newsList){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsList  $newsList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsList $newsList){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsList  $newsList
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsList $newsList){
        //
    }
}
