<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    //protected $table = 'customers';
    //protected $fillable = ['name', 'email', 'active'];

    protected $guarded = [];

    public function scopeActive($query){

        return $query->where('active', 1);
    }

    public function scopeinActive($query){

        return $query->where('active', 0);
    }
}
