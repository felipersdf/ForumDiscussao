<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
  protected $guarded = [];

  /* Uma thread possui um criador
  */ 
  public function creator()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
  
  public function addReply($reply)
  {
      $this->replies()->create($reply); 
  }

  public function path()
  {
    return "/threads/{$this->theme->slug}/{$this->id}";
  }
/* Uma thread está associada à um tema */
  public function theme()
  {
      return $this->belongsTo(Theme::class);
  }

   /**
     * Uma thread pode possuir vários replies.
     */
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

}
