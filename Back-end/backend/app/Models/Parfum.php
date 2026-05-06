<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parfum extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'prix',
        'stock',
        'marque',
        'genre'
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

    public function notes()
    {
        return $this->belongsToMany(NoteOlfactive::class);
    }

    public function lignesCommande()
    {
        return $this->hasMany(LigneCommande::class);
    }
}
