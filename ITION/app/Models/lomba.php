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
}
