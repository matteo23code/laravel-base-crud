<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$beers = Beer::where('name')->get();
       //dd($beers);

        $beers = Beer::all();
        return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|max:255',
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'taste' => 'required|max:255',
            'color' => 'required|max:255',
            'alcohol' => 'required',
            'image' => 'required|max:2048',
        ]);


        $data = $request->all();

        $beer = new Beer();
        $beer->fill($data);
        $beer->save();

        //versione lunga...
        //$beer->brand = $data['brand'];
        //$beer->name = $data['name'];
        //$beer->type = $data['type'];*/

        $beersShop = Beer::orderBy('id', 'desc')->first();
        return redirect()->route('beers.show', $beersShop);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        //$beer = Beer::find($id);
        return view('beers.show', compact('beer'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
