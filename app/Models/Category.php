<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public $guarded = [];

   public function parent_category():\Illuminate\Database\Eloquent\Model\Relation\BelongsTo
  
   {
     return $this->belongsTo(__CLASS__);
   }

   public function child_category():\Illuminate\Database\Eloquent\Model\Relation\HasMany
   {
       return $this->hasMany(__CLASS__);
   }
}