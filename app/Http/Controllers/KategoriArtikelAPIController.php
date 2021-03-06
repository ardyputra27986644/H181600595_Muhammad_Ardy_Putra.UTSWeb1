<?php

namespace App\Http\Controllers;

use App\KategoriArtikel;
use Illuminate\Http\Request;

class KategoriArtikelAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriartikels=KategoriArtikel::all();

        return $kategoriartikels;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        $kategoriartikel=KategoriArtikel::create($input);

        return $kategoriartikel;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoriartikel=KategoriArtikel::find($id);

        return $kategoriartikel;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();

        
        $kategoriartikel=KategoriArtikel::find($id);

        
        if(empty($kategoriartikel)){
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $kategoriartikel->update($input);
        
        return response()->json($kategoriartikel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriartikel=KategoriArtikel::find($id);

        
        if(empty($kategoriartikel)){
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        
        $kategoriartikel->delete();

        return response()->json(['message'=>'data telah dihapus']);
    }
}