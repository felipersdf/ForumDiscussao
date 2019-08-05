<?php

namespace App;

use App\Filters\ThreadFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Thread extends Model
{
  use RecordsActivity, Searchable;
  
  protected $guarded = [];

  protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('replyCount', function ($builder) {
            $builder->withCount('replies');
        });

        static::deleting(function ($thread) {
          $thread->replies()->delete();
      });
  }

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

    public function scopeFilter($query, ThreadFilters $filters)
    {
        return $filters->apply($query);
    }
}
