<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class Post extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function comments() {
        return $this->hasMany('App\Comment');
    }
    
    public function addComment($request) {
        $this->comments()->create([
            'body' => $request->body, 
            'user_id' => auth()->user()->id
        ]);
        
        // Comment::create([
        //     'body' => $request->body,
        //     'post_id' => $this->id
        // ]);

    }

    public function scopeFilter($query, $filters) {
    
    if(!empty($filters)) { 

            if($month = $filters['month']) {
                $query->whereMonth('created_at', Carbon::parse($month)->month);
            }
            
            if($year = $filters['year']) {
                $query->whereYear('created_at', $year);            
            }

        }
        
    }

    public static function archives(){
        return static::selectRaw('YEAR(created_at) as Year, MONTHNAME(created_at) as Month, COUNT(*) as published')
            ->groupBy('Year', 'Month')
            ->orderByRaw('min(created_at) DESC')
            ->get();
    }

    public function compose(View $view) {
        $view->with('archives', $this->archives());
    }
}
