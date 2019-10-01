<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id', 'address', 'website', 'email', 'phone', 'status'
    ];

    /**
     * Relation with user model
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
