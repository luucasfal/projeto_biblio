<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtualizarLivrosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'book_name' => 'required|max:190', 
            'autor'  => 'required|max:190', 
            'data_de_publicacao'  => 'required|date', 
            'price'  => 'required|numeric',
            'quantidade' => 'required|numeric|min:1' 
        ];
    }
    public function messages()
    {
        return [
            'book_name.required' => 'O nome do livro é obrigatório', 
            'data_de_publicacao.required'  => 'A Data de publicação é obrigatório', 
            'price.required'  => 'O preço é obrigatório',
            'quantidade.min' => 'A quantidade minima é 1',
            
            'numeric' => 'O campo precisa ser prenchida com o numero',
            'date' => 'O necessario ser uma data válida',
            'max' => 'Você passou do limite de 190 caracteres',
            'required' => 'O campo :attribute é obrigatório', 
        ];
    }
}
