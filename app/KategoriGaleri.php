<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    //
    protected $table='kategori_galeri';

    protected $fillable=[
        'nama','users_id'
    ];

    public function galeri(){
        return $this->belongsTo('Berita::class','kategori_galeri_id','id');
    }

    public function user(){
        return $this->belongsTo('User::class','users_id','id');
    }
}
