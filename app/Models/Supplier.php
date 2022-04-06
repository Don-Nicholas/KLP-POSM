<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function beverages() {
        return $this->hasMany('App\Models\Beverage');
    }
}
