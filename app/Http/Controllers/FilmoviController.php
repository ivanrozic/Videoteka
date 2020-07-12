<?php

namespace App\Http\Controllers;

use App\Filmovi;
use App\Zanr;
use Illuminate\Http\Request;

class FilmoviController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter($filter) {
        $filmovi = Filmovi::where('naslov', 'like', $filter.'%')->paginate(10);
        return view('filmovis.index', compact('filmovi'));
    
    }
    public function index() {
        $filmovi = Filmovi::paginate(30)->sortBy('naslov');
        return view('filmovis.index', compact('filmovi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $lista_zanrova = Zanr::all();
        return view('filmovis.create', compact('lista_zanrova'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Filmovi $filmovi) {

        $validatedData = $request->validate([
            'naslov' => 'required|string|max:150',
            'zanr_id' => 'required|numeric|between:1,14',
            'godina' => 'required|numeric',
            'trajanje' => 'required|numeric',
            'slika' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $filmovi = new Filmovi();

        $filmovi->naslov = $request->input('naslov');
        $filmovi->zanr_id = $request->input('zanr_id');
        $filmovi->godina = $request->input('godina');
        $filmovi->trajanje = $request->input('trajanje');
        $filmovi->slika = $request->input('slika');

        if ($request->hasfile('slika')) {
            $file = $request->file('slika');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $request->file('slika')->storeAs('', $request->file('slika')->getClientOriginalName());
            $file->move('images/', $filename);

//see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
//a folder->upload and appsetting, and it wil store the images in your file.

            $filmovi->slika = $filename;
        } else {
            return $request;
            $filmovi->slika = '';
        }
        $filmovi->save();

        $zanr = Zanr::find($request->input('zanr_id'));  // koristimo postojecu

        $filmovi->zanr()->save($zanr);

        return redirect()->route('filmovis.index')->with('success', 'Film uspješno dodan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function show(Filmovi $filmovi) {
        $lista_filmova = Filmovi::all()->sortBy('naslov');
        return view('filmovis.show', compact('filmovi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function edit(Filmovi $filmovi) {
        return view('filmovis.edit', compact('filmovi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function update() {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filmovi $filmovi) {
        $filmovi->delete();
        return redirect()->route('filmovis.index')->with('success', 'Film obrisan!');
    }

}
