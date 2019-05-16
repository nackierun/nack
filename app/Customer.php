<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class   Customer extends Model {

    //
    //protected $table = 'customers';
    //protected $fillable = ['name', 'email', 'active'];

    protected $guarded = [];

    public  function  getActiveAttribute($attribute)
    {
       return [
           0 => 'inactive',
           1 => 'active'
       ] [$attribute] ;
    }

    public function scopeActive($query) {

        return $query->where('active', 1);
    }

    public function scopeinActive($query) {

        return $query->where('active', 0);
    }

    public function company() {
        return $this->belongsTo(company::class);
    }

}
