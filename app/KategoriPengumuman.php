<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    //
    protected $table='kategori_pengumuman';

    protected $fillable=[
        'nama','users_id'
    ];

    public function berita(){
        return $this->belongsTo('Berita::class','kategori_pengumuman_id','id');
    }

    public function user(){
        return $this->belongsTo('User::class','users_id','id');
    }
}
