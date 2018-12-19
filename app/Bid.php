<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
   protected $fillable = [
       'article_id',
       'bid',
       'user_id',
   ];

   /**
    * Bid belongs to a user 1:1
    *
    * @return User
    */
   public function user() {
       return $this->belongsTo('app\User');
   }

   /**
    * Bid belongs to a user 1:1
    *
    * @return Article
    */
   public function article() {
       return $this->belongsTo('app\Article');
   }

   /**
    * Bid has many comments 1:n
    *
    * @return Comment
    */
   public function comments() {
       return $this->hasMany('app\Comment');
   }

}
