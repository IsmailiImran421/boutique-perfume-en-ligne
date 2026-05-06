<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteOlfactive extends Model
{
        protected $fillable = [
        'nom',
        'type'
    ];

    public function parfums()
    {
        return $this->belongsToMany(Parfum::class);
    }
}
