<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerGroup extends Model
{
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
