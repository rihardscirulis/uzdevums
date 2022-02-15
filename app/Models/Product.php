<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
    */
    protected $guarded = [];
    
    public function attributes() {
        return $this->hasMany(Product_attributes::class);
    }
}
