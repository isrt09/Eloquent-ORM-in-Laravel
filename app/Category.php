<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */     
    protected $fillable = ['title','description','category_id','user_id'];

    /**
     * Category has many Posts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = category_id, localKey = id)
    	return $this->hasMany(Post::class);
    }
}
