<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    //
    protected $table='kategori_berita';

    protected $fillable=[
        'nama','users_id'
    ];

    public function berita(){
        return $this->belongsTo('Berita::class','kategori_berita_id','id');
    }

    public function user(){
        return $this->belongsTo('User::class','users_id','id');
    }
}
