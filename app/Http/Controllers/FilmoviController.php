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
    public function index()
    {
        $filmovi = Filmovi::all();
        return view('filmovis.index', compact('filmovi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Filmovi $filmovi)
    {
        $zanrovi= Zanr::all()->sortBy('name');
        return view('filmovis.create',compact('zanrovi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Filmovi $filmovi)
    {
        
        $validatedData = $request->validate([
        'naslov'  => 'required|string|max:150|alpha',
        'zanr_id'  => 'required|numeric',
        'godina'  => 'required|numeric',
        'trajanje'  => 'required|numeric',
        'slika'   =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        
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
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

//see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
//a folder->upload and appsetting, and it wil store the images in your file.

            $filmovi->slika = $filename;
        } else {
            return $request;
            $filmovi->slika = '';
        }
        $filmovi->save();

        return redirect()->route('filmovis.index')->with('success', 'Film uspješno dodan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function show(Filmovi $filmovi)
    {
        $lista_filmova = Filmovi::all()->sortBy('naslov');
        return view('filmovis.show', compact('filmovi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
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
