<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['serveur_id', 'numero_table', 'etat', 'payé'];

    protected $casts = [
        'payé' => 'boolean',
    ];

    public function serveur()
    {
        return $this->belongsTo(Serveur::class, 'serveur_id');
    }

    public function plats()
    {
        return $this->belongsToMany(Plat::class, 'commande_plat')
                    ->withPivot('nombre');
    }
}
