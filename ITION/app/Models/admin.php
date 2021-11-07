<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class admin extends Authenticatable
{
    use HasFactory, Notifiable;
    // Menghapus created at dan edited at
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The lomba that belong to the admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function lomba()
    {
        return $this->belongsToMany(lomba::class, 'pengisian_lomba', 'id_admin', 'id_lomba')->withTimestamps();
    }

    /**
     * The galeri that belong to the admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function galeri()
    {
        return $this->belongsToMany(galeri::class, 'pengisian_galeri', 'id_admin', 'id_galeri')->withTimestamps();
    }
}
