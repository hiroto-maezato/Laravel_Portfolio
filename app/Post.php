<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
            'title',
            'body',
        ];
    
    
    public function comments() 
    {
        return $this->hasMany('App\Comment');
        // ↑引数にある''\''これの向きで5時間くらい死んだ。
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
        // ↑引数にある''\''これの向きで5時間くらい死んだ。
    }
}
