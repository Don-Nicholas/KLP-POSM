<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
