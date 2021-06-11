<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class testimoni extends Pivot
{
    protected $table = 'testimoni';
    
    protected $fillable = [
        'id_lomba',
        'id_reviewer',
        'tahun_lomba',
        'testimoni',
    ];
}
