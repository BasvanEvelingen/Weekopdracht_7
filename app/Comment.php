<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'url',
        'user_id',
        'commentable_id',
        'commentable_type',
    ];

    /**
     * Comment belongs to a article 1:1
     *
     * @return Article
     */
    public function article() {
        return $this->belongsTo('app\Article');
    }

    /**
     * Comment belongs to a bid 1:1
     *
     * @return Article
     */
    public function bid() {
        return $this->belongsTo('app\Article');
    }

    /**
     * Comment belongs to a user 1:1
     *
     * @return Comment
     */
    public function user() {
        return $this->belongsTo('app\Comment');
    }
}
