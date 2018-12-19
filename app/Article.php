<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'price',
        'description',
        'picture',
        'bid_id',
    ];

    /**
     * Article belongs to a user 1:1
     *
     * @return User
     */
    public function user() {
        return $this->belongsTo('app\User');
    }

    /**
     * Article has (hopefully) many bids 1:n
     *
     * @return Bid
     */
    public function bids() {
        return $this->hasMany('app\Bid');
    }

    /**
     * Articles have many categories m:n
     *
     * @return Category
     */
    public function categories() {
        return $this->belongsToMany('app\Category');
    }

    /**
     * Articles have many payments m:n
     *
     * @return Payment
     */
    public function payments() {
        return $this->belongsToMany('app\Payment');
    }

    /**
     * Article has many comments 1:n
     *
     * @return Comment
     */
    public function comments() {
        return $this->hasMany('app\Comment');
    }
}
