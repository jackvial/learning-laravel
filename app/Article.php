<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
	// Only these fields can be mass assigned
    protected $fillable = [
    	'title',
    	'body',
    	'published_at',
        'user_id' // temp!
    ];

    // Mutate to carbon instance
    protected $dates = ['published_at'];

    public function scopePublished($query){
    	$query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query){
    	$query->where('published_at', '>', Carbon::now());
    }

    public function setPublishedAtAttribute($date){
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
     * An article is owned by a user
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}