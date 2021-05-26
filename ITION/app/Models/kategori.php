<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kategori',
    ];

    /**
     * Get all of the comments for the lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function lomba()
    {
        return $this->hasMany(Lomba::class);
    }
}
