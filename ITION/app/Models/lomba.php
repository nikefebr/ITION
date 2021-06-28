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
    public function penyelenggara()
    {
        return $this->belongsTo(penyelenggara_lomba::class);
    }


    /**
     * Get all of the galeri for the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galeri()
    {
        return $this->hasMany(galeri::class);
    }

    /**
     * The admin that belong to the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function admin()
    {
        return $this->belongsToMany(admin::class, 'pengisian_lomba', 'id_lomba', 'id_admin')->withTimestamps();
    }

    /**
     * The pelanggan that belong to the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pelanggan()
    {
        return $this->belongsToMany(pelanggan::class, 'newsletter', 'id_lomba', 'id_pelanggan')->withPivot('subyek','isi')->withTimestamps();
    }

    /**
     * The reviewer that belong to the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reviewer()
    {
        return $this->belongsToMany(reviewer::class, 'testimoni', 'id_lomba', 'id_reviewer')->using(testimoni::class);
    }
}
