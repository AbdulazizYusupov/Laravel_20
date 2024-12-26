<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['element_id', 'att_char_id'];

    public function element()
    {
        return $this->belongsTo(Element::class, 'element_id');
    }


    public function attchar()
    {
        return $this->belongsTo(AttChar::class, 'att_char_id');
    }

}
