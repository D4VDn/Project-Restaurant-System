<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestauranteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
{
    $rules = [
        'nome'           => 'required|string|min:3|max:100',
        'tipo_culinaria' => 'required|string|min:3|max:50', // <-- Alterado aqui
        'telefone'       => 'required|string|max:20',
    ];

    if ($this->isMethod('post')) {
        $rules['foto'] = 'required|image|mimes:jpg,jpeg,png,webp|max:2048';
    } else {
        $rules['foto'] = 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048';
    }

    return $rules;
}

public function messages(): array
{
    return [
        'nome.required'           => 'O nome do produto é obrigatório.',
        'nome.min'                => 'O nome deve ter pelo menos 3 caracteres.',
        'tipo_culinaria.required' => 'O tipo de culinária é obrigatório.', // <-- Alterado aqui
        'preco.required'          => 'O preço é obrigatório.',
        'preco.numeric'           => 'O preço deve ser um número válido.',
        'preco.min'               => 'O preço não pode ser negativo.',
        'foto.required'           => 'A foto é obrigatória no cadastro.',
        'foto.image'              => 'O arquivo deve ser uma imagem.',
        'foto.mimes'              => 'A imagem deve ser JPG, JPEG, PNG ou WEBP.',
        'foto.max'                => 'A imagem deve ter no máximo 2MB.',
    ];
}
}