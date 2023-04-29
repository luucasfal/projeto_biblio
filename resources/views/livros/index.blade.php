@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        Livros
                    </div>
                    <div class="col-6">
                        <div class="float-right">
                        </div>
                    </div>
                </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead >
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Data de Publicação</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($livros as $key => $livro) 
                                <tr>
                                    <td scope="row">{{$livro->book_name}}<td>
                                    <td>{{$livro->autor}}<td>
                                    <td>{{$livro->data_de_publicacao}}<td>
                                    <td>{{$livro->quantidade}}<td>
                                    <td>{{$livro->price}}<td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection