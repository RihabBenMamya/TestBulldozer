<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'url'
    ];
    
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_link');
    }
    
}
