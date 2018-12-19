<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'username',
        'address',
        'zipcode',
        'city',
        'telephone',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * User has many articles 1:n
     *
     * @return Article
     */
    public function articles() {
        return $this.hasMany('app\Article');
    }

    /**
     * User has many comments 1:n
     *
     * @return Comment
     */
    public function comments() {
        return $this.hasMany('app\Comment');
    }

    /**
     * User belongs to a role 1:1
     *
     * @return Role
     */
    public function role() {
        return $this.belongsTo('app\Role');
    }

    /**
     * User has many bids
     *
     * @return Bid
     */
    public function bids() {
        return $this.hasMany('app\Bid');
    }
}
