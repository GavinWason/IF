<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'name', 'restaurant_id', 'details', 'price', 'status', 'ratings',
    ];

    /**
     * Relation with user model
     */
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    /**
     * Relation with order model
     */
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
