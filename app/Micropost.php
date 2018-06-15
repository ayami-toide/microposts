<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favoriteds() /*お気に入りのリスト 多対多の関係を構築するもの*/
    {
        return $this->belongsToMany(User::class, 'favorites', 'favorite_id', 'user_id')->withTimestamps();
    }
}

