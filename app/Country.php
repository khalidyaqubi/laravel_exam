<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    /**
     * @var array
     */
    protected $guarded = [];


    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
