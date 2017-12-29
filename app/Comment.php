<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    const STORE_RULES = [
        
        'content' => 'required | min:15'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
