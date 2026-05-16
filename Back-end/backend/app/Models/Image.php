<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
        protected $fillable = [
        'url',
        'parfum_id',
        'is_main'
    ];

    public function parfum()
    {
        return $this->belongsTo(Parfum::class);
    }
}
