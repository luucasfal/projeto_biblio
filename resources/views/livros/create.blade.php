
<form method="post" action=" {{ route('livros.store') }}">
    @csrf

    <div>
        <label>Nome do Livro:</label> <br>
        <input type="text" name="book_name"> 
    </div>

    <div>
        <label>Autor:</label> <br>
        <input type="text" name="autor"> <br>
    </div>

    <div>
        <label>Data de Publicação:</label> <br> 
        <input type="date" name="data_de_publicacao"> 
    </div>

    <div>
        <label>Valor Comercial:</label> <br>
        <input type="number" name="price" step="0.01"> 
    </div>

    <div>
        <label>Observaçoes:</label> <br>
        <input type="text" name="observations"> 
    </div>

    <button type="submit">Cadastrar</button>

</form>