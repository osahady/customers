<?php

namespace App;
use App\Customer;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guraded = [];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
