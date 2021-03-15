<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Tag belongs to Post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
    	// belongsTo(RelatedModel, foreignKey = post_id, keyOnRelatedModel = id)
    	return $this->belongsToMany(Post::class);
    }
}
