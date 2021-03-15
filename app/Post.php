<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */     
    protected $fillable = ['title','description','category_id','user_id'];

    /**
     * Post belongs to Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
    	// belongsTo(RelatedModel, foreignKey = category_id, keyOnRelatedModel = id)
    	return $this->belongsTo(Category::class);
    }
}
