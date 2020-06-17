<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu';
    protected $fillable = ['menu_prefix', 'menu_number', 'menu_suffix', 'price', 'item_name', 'item_category', 'spiciness_scale'];

    public function allergies(){
        return $this->belongsToMany(Allergy::class, 'item_has_allergy', 'item_id', 'allergy_id');
    }
    public function spiciness(){
        return $this->hasOne(Spiciness::class);
    }
}
