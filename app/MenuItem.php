<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu';
    protected $fillable = ['menu_prefix', 'menu_number', 'menu_suffix', 'price', 'item_name', 'item_category'];

    public function allergies(){
        return $this->hasMany(Allergy::class);
    }
}
