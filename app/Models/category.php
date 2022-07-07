<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $fillable = [
        'namakategori', 'slug','image'
    ];
    
    public function produk(){
        return $this->hasMany(produk::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
