<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    /**
     * Categories belong to many articles
     *
     * @return Article
     */
    public function articles() {
        return $this->belongsToMany('app\Article');
    }

}


