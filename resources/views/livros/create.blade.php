
<form method="post" action=" {{ route('livros.store') }}">
    @csrf

    <div>
        <label>Nome do Livro:</label> <br>
        <input type="text" name="book_name" value="{{ old('book_name') }}"> <br>
        {{$errors->has('book_name') ? $errors->first('book_name') : ''}} <br>
    </div>

    <div>
        <label>Autor:</label> <br>
        <input type="text" name="autor" value="{{ old('autor') }}" > <br>
        {{$errors->has('autor') ? $errors->first('autor') : ''}} <br> 
    </div>

    <div>
        <label>Data de Publicação:</label> <br> 
        <input type="date" name="data_de_publicacao" value="{{ old('data_de_publicacao') }}"> <br>
        {{$errors->has('data_de_publicacao') ? $errors->first('data_de_publicacao') : ''}} <br>
    </div>

    <div>
        <label>Valor Comercial:</label> <br>
        <input type="number" name="price" step="0.01" value="{{ old('price') }}"><br>
        {{$errors->has('price') ? $errors->first('price') : ''}} <br>
    </div>

    <div>
        <label>Observaçoes:</label> <br>
        <input type="text" name="observations" value="{{ old('observations') }}"> <br>
        {{$errors->has('observations') ? $errors->first('observations') : ''}} <br>
    </div>

    <div>
        <label>Quantidade:</label> <br>
        <input type="number" name="quantidade" value="{{ old('quantidade') }}"> <br>
        {{$errors->has('quantidade') ? $errors->first('quantidade') : ''}} <br>
    </div>

    <br>
    <button type="submit">Cadastrar</button>

</form>