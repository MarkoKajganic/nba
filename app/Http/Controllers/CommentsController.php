<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;
use App\Mail\VerifyUser;
use App\Mail\CommentRecieved;
use Illuminate\Support\Facades\Mail;


class CommentsController extends Controller
{
    public function __construct()
    {
      
        $this->middleware('checkForBadWords')->only('store');
    }

    public function store($team_id)
    {
    
        $this->validate(request(), Comment::STORE_RULES);

        $team = Team::find($team_id);

        $comment = new Comment();
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = $team_id;

        $comment->save();

        Mail::to($team)->send(new CommentRecieved($comment));

        return redirect()->route('timovi', ['id' => $team_id]);
    }


}
