<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
            'body',
        ];
        
        
    public function post()
    {
        return $this->belongsTo('App\Post');
        // ↑引数にある''\''これの向きで5時間くらい死んだ。
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
        // ↑引数にある''\''これの向きで5時間くらい死んだ。
    }
}
