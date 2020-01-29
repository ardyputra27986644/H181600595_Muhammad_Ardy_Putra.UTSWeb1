<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function artikels(){
        return $this->hasMany('Artikel::class','users_id','id');
    }

    public function kategoriArtikels(){
        return $this->hasMany('KategoriArtikel::class','users_id','id');
    }

    public function berita(){
        return $this->hasMany('Berita::class','users_id','id');
    }

    public function kategoriBerita(){
        return $this->hasMany('KategoriBerita::class','users_id','id');
    }

    public function galeri(){
        return $this->hasMany('Galeri::class','users_id','id');
    }

    public function kategoriGaleri(){
        return $this->hasMany('KategoriGaleri::class','users_id','id');
    }

    public function pengumuman(){
        return $this->hasMany('Pengumuman::class','users_id','id');
    }

    public function kategoriPengumuman(){
        return $this->hasMany('KategoriPengumuman::class','users_id','id');
    }

    
}