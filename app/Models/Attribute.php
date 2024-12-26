<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Attchar;

class Attribute extends Model
{
    protected $fillable = ['name', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function attchar()
    {
        return $this->hasMany(AttChar::class, 'att_id');
    }
}
