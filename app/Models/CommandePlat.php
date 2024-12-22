<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CommandePlat extends Pivot
{
    protected $table = 'commande_plat';

    protected $fillable = ['commande_id', 'plat_id', 'nombre'];
}
