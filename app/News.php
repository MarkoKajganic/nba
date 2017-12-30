<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    public $table = 'news';


    protected $guarded = ['id'];

    const STORE_RULES = [
        
        'content' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
