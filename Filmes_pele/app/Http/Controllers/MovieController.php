<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
    
    public function create()
    {
        return view('movies.create');
    }
    
    public function store(Request $request)
    {
        Movie::create($request->all());
        return redirect()->route('movies.index')->with('success', 'Filme criado com sucesso!');
    }
    
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', compact('movie'));
    }
    
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return redirect()->route('movies.index')->with('success', 'Filme atualizado com sucesso!');
    }
    
    public function destroy($id)
    {
        Movie::findOrFail($id)->delete();
        return redirect()->route('movies.index')->with('success', 'Filme excluído com sucesso!');
    }
    
}
