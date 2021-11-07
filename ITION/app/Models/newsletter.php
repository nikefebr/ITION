<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class newsletter extends Pivot
{
    protected $table = 'newletter';
    
    protected $fillable = [
        'id_pelanggan',
        'id_lomba',
        'subyek',
        'isi',
    ];
}
