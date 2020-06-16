<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spiciness extends Model
{
    protected $table = 'spiciness';

    public function items(){
        return $this->hasMany(MenuItem::class);
    }
}
