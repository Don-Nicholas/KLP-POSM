<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function beverage() {
        return $this->hasMany('App\Models\Beverage');
    }

    public function category() {
        return $this->hasMany('App\Models\Category');
    }
    public function supplier() {
        return $this->hasMany('App\Models\Supplier');
    }
}
