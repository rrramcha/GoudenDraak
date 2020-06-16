<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    protected $table = 'allergies';

    public function dishes(){
        return $this->belongsToMany(MenuItem::class, 'item_has_allergy', 'allergy_name', 'item_id');
    }
}
