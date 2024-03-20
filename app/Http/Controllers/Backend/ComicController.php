<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('pages.comicsView.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comicsView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|string|in:comic book,graphic novel',
        ]);

        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);

        return view('pages.comicsView.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('pages.comicsView.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|string|in:comic book,graphic novel',
        ]);

        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Show the confirm for deleting the specified resource.
     */
    public function confirm(Comic $comic)
    {
        return view('pages.comicsView.confirm', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
