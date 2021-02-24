<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['platform'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
