<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLivrosRequest;
use App\Models\Livros;
use Illuminate\Http\Request;

class LivrosController extends Controller
{

    public function index()
    {
        return view('livros.index');
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
        return view('livros.show');
    }

    public function edit(Livros $livros)
    {
        return view('livros.edit');
    }

    public function update(Request $request, Livros $livros)
    {
        //
    }

    public function destroy(Livros $livros)
    {
        //
    }
}
