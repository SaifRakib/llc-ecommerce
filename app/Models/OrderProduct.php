<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function order():\Illuminate\Database\Eloquent\Model\Relations\BelongsTo
   {
     return $this->belongsTo(Order::class);
   }

   public function product():\Illuminate\Database\Eloquent\Model\Relations\BelongsTo
   {
     return $this->belongsTo(Product::class);
   }
}
