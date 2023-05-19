<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use COM;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation data
        $request->validate([
            'title' => 'required|max:225',
            'description' => 'nullable|max:650',
            'thumb' => 'required|url|max:255',
            'price' => 'required|numeric',
            'series' => 'required|max:100',
            'sale_date' => 'required|max:50',
            'type' => 'required|max:50'
        ]);


        $data = $request->all();

        $newComic = new Comic();
        //look App/Models/Comic
        $newComic->fill($data);
        // fill() is equal to ->
        //  $newComic->title = $data['title'];
        //  $newComic->description = $data['description'];
        //  $newComic->thumb = $data['thumb'];
        //  $newComic->price = $data['price'];
        //  $newComic->series = $data['series'];
        //  $newComic->sale_date = $data['sale_date'];
        //  $newComic->type = $data['type'];
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id) = public function show(Comic $comic)

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic) // <= (..., Comic $comic) = ($comic = Comic::findOrFail($id);)
    {
        // validation data
        $request->validate([
            'title' => 'required|max:225',
            'description' => 'nullable|max:650',
            'thumb' => 'required|url|max:255',
            'price' => 'required|numeric',
            'series' => 'required|max:100',
            'sale_date' => 'required|max:50',
            'type' => 'required|max:50'
        ]);


        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }

    private function validation()
    {
    }
}
