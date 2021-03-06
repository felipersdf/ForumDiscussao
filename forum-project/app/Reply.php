<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{ 
    //
    protected $guarded = [];

    public function owner()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function thread()
    {
        return $this->belonsTo(Thread::class, 'thread_id');
    }
}
