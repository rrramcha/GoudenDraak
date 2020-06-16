<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    protected $table = 'allergies';

    public function items(){
        return $this->belongsToMany(MenuItem::class);
    }
}
