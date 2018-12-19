<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlePayment extends Model
{
    protected $fillable = [
        'article_id',
        'payment_id',
    ];
}
