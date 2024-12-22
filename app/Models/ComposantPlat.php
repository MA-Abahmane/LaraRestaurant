<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ComposantPlat extends Pivot
{
    protected $table = 'composant_plat';

    protected $fillable = ['composant_id', 'plat_id', 'quantite', 'unité'];
}