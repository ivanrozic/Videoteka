<?php

namespace App\Http\Controllers;

use App\Zanr;
use Illuminate\Http\Request;

class ZanrController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $zanrovi = Zanr::all();
        return view('zanr.index', compact('zanrovi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function show(Zanr $zanr) {
        $lista_filmova_odabranog_zanra = $zanr->filmovi()->get();
        return view('zanr.show', ['zanrovi' => $zanr], compact('lista_filmova_odabranog_zanra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function edit(Zanr $zanr) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zanr $zanr) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zanr $zanr) {
        //
    }

}
