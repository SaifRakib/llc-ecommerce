<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    
   public function customer():\Illuminate\Database\Eloquent\Model\Relations\BelongsTo
   {
     return $this->belongsTo(User::class);
   }

   public function processor():\Illuminate\Database\Eloquent\Model\Relations\HasOne
   {
     return $this->hasOne(User::class,'processed_by');
   }

   public function products():\Illuminate\Database\Eloquent\Model\Relations\HasMany
   {
     return $this->hasMany(OrderProduct::class);
   }

}
