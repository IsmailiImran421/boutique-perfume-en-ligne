<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    protected $table = 'lignes_commande';

    protected $fillable = [
        'commande_id',
        'parfum_id',
        'quantite',
        'prix_unitaire'
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }

    public function parfum()
    {
        return $this->belongsTo(Parfum::class);
    }
}
