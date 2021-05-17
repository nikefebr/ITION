<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
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

    public function lomba()
    {
        return $this->hasMany(Lomba::class);
    }
}
