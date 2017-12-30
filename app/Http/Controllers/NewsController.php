<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{

    public function index() {
        $news = News::paginate(7);



        return view('/news/index', compact('news'));
    }

    public function show($id) {
        $news = News::find($id);
        
        return view('/news/show', compact('news'));
    }


    public function store($user_id)
    {
    
        $this->validate(request(), News::STORE_RULES);

        $news = News::find($user_id);

        $news = new News();
        $news->title = request('title');
        $news->content = request('content');
        $news->user_id = auth()->user()->id;
        
        $news->save();

        return redirect()->route('/');
    }
}
