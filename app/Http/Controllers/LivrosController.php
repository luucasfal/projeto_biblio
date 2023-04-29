<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLivrosRequest;
use App\Models\Livros;
use Illuminate\Http\Request;

class LivrosController extends Controller
{

    public function index()
    {
        $livros = Livros::all();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(CreateLivrosRequest $request)
    {
        $request->validated();
        Livros::create($request->all());
        return redirect()->route('livros.index');
    }

    public function show(Livros $livros)
    {
        return view('livros.show',compact('livros'));
    }

    public function edit(Livros $livros)
    {
        return view('livros.edit', compact('livros'));
    }

    public function update(Request $request, Livros $livros)
    {
        $livros->update($request->all());
        return redirect()->route('livros.index');
    }

    public function destroy(Livros $livros)
    {
        $livros->delete();
        return redirect()->route('livros.index');
    }
}
