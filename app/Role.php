<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    /**
     * Role belongs to a user
     *
     * @return User
     */
    public function user() {
        return $this->belongsTo('app\User');
    }
}
