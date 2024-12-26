<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\AttChar;

class Characteristic extends Model
{
    protected $fillable = ['name'];

    public function attchar()
    {
        return $this->hasMany(AttChar::class, 'char_id');
    }
}
