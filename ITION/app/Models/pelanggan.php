<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    // Menghapus created at dan edited at
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'email',
    ];

    /**
     * The lomba that belong to the pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function lomba(): BelongsToMany
    {
        return $this->belongsToMany(lomba::class, 'newsletter', 'id_pelanggan', 'id_lomba')->withTimestamps();
    }
}
