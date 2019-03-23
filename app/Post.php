<?php

namespace App;

use Illuminate\Support\Carbon;

class Post extends Model
{

    

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
     public static function archive()
     {
        
        return static::selectRaw('year(created_at)year, monthName(created_at)month, count(*)published')
        ->groupBy('year','month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();  
     }

    public  function scopeFilter($query , $filters)
    {
        
        if($month = $filters['month'])
        {
            $query->whereMonth('created_at' , Carbon::parse($month)->month);
        }

        if($year = $filters['year'])
        {
            $query->whereMonth('created_at',$year);
        }

        
    }

    public function addComment($body)
    {

        $this->comments()->create(compact('body'));
        
    }
}
