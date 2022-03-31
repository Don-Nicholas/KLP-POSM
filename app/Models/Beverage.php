<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    use HasFactory;

    protected $table = 'beverages';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function purchases() {
        return $this->hasMany('App\Models\Purchase');
    }
}
