<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $table = 'log_activity';
    protected $fillable = [
         'url', 'method', 'ip', 'agent','pays', 'user_id'
    ];
    public function user()
    {
        return $this->belongsToMany(User::class, 'log_activity','user_id');
    }
}

    
