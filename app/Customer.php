<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //overriding to use mass assginment
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
}
