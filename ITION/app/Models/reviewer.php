<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviewer extends Model
{
    use HasFactory;
    protected $table = 'reviewer';
    protected $primaryKey = 'id_reviewer';
    public $timestamps = false;

    protected $fillable = [
        'foto',
        'nama',
        'angkatan',
    ];

    /**
     * The lomba that belong to the reviewer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function lomba()
    {
        return $this->belongsToMany(lomba::class, 'testimoni', 'id_reviewer', 'id_lomba')->using(testimoni::class);
    }
}
