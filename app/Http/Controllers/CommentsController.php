<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;

class CommentsController extends Controller
{
    public function store($team_id)
    {
        $team = Post::find($team_id);

        $this->validate(request(), Comment::STORE_RULES);

        $post->comments()->create(request()->all());

        return redirect()->route('/nba/teams/{id}', ['id' => $team_id]);
    }
}
