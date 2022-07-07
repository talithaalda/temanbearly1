<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_order extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function detail_order(){
        return $this->belongsTo(detail_order::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function produk(){
        return $this->belongsTo(produk::class);
    }

}
