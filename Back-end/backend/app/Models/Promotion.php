<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
        protected $fillable = [
        'code',
        'reduction',
        'date_debut',
        'date_fin',
        'is_active',
        'parfum_id'
    ];

    public function parfum()
    {
        return $this->belongsTo(Parfum::class);
    }
}
