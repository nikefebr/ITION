<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lomba extends Model
{
    public $timestamps = false;
    protected $table = 'lomba';
    protected $primaryKey = 'id_lomba';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'poster',
        'judul',
        'deskripsi',
        'syarat',
        'timeline',
        'biaya',
        'link_panduan',
        'hadiah_juara_1',
        'hadiah_juara_2',
        'hadiah_juara_3',
        'lainnya',
        'deadline',
        'id_penyelenggara',
        'id_kategori',
        'tahun',
        'link_website',
    ];

    /**
     * Get the lomba that owns the kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    /**
     * Get the penyelenggara that owns the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penyelenggara(): BelongsTo
    {
        return $this->belongsTo(penyelenggara_lomba::class);
    }


    /**
     * Get all of the galeri for the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galeri(): HasMany
    {
        return $this->hasMany(galeri::class);
    }

    /**
     * The admin that belong to the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function admin(): BelongsToMany
    {
        return $this->belongsToMany(admin::class, 'pengisian_lomba', 'id_lomba', 'id_admin')->withTimestamps();
    }

    /**
     * The pelanggan that belong to the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pelanggan(): BelongsToMany
    {
        return $this->belongsToMany(pelanggan::class, 'newsletter', 'id_lomba', 'id_pelanggan')->withTimestamps();
    }

    /**
     * The reviewer that belong to the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reviewer(): BelongsToMany
    {
        return $this->belongsToMany(reviewer::class, 'testimoni', 'id_lomba', 'id_reviewer')->withPivot('tahun_lomba','testimoni');
    }
}
