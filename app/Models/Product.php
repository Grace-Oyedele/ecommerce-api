<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const AVAILABLE_PRODUCT= 'available';
    const UNAVAILABLE_PRODUCT= 'unavailable';
    use HasFactory;
    protected $fillable= [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id',
    ];

    public function isavailable()
    {
        return $this->status == product:: AVAILABLE_PRODUCT;
    }

     public function sellers()
     {
         return $this->belongsTo(Seller::class);
     }

      public function trasanctions()
      {
          return $this->hasMany(Transaction::class);
      }

       public function categories()
       {
           return $this->belongsToMany(Category::class);
       }


}
