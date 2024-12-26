<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttChar extends Model
{
    protected $fillable = ['att_id', 'char_id'];

    public function att()
    {
        return $this->belongsTo(Attribute::class, 'att_id');
    }

    public function char()
    {
        return $this->belongsTo(Characteristic::class, 'char_id');
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'att_char_id');
    }
}
