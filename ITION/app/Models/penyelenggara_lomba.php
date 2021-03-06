<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyelenggara_lomba extends Model
{
    public $timestamps = false;
    protected $table = 'penyelenggara_lomba';
    protected $primaryKey = 'id_penyelenggara';
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_penyelenggara',
        'kontak',
        'nama_kontak',
    ];

    /**
     * Get all of the lomba for the penyelenggara_lomba
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lomba()
    {
        return $this->hasMany(lomba::class);
    }
}
