<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    protected $primaryKey = 'id_galeri';
    public $timestamps = false;

    protected $fillable = [
        'foto',
        'deskripsi',
        'tgl_foto',
        'id_lomba',
    ];

    /**
     * The admin that belong to the galeri
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function admin()
    {
        return $this->belongsToMany(admin::class, 'pengisian_galeri', 'id_galeri', 'id_admin')->withTimestamps();
    }

    /**
     * Get the lomba that owns the galeri
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lomba()
    {
        return $this->belongsTo(lomba::class);
    }

    

}
