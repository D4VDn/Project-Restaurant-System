<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use App\Http\Requests\RestauranteRequest;
use Illuminate\Support\Facades\Storage;

class RestauranteController extends Controller
{
    public function index()
    {
        $restaurantes = Restaurante::orderBy('nome')->paginate(4);
        return view('restaurantes.index', compact('restaurantes'));
    }

    public function create()
    {
        return view('restaurantes.create');
    }

    public function store(RestauranteRequest $request)
    {
        $dados = $request->validated();

        if ($request->hasFile('foto')) {
            $dados['foto'] = $request->file('foto')->store('restaurantes', 'public');
        }

        Restaurante::create($dados);

        return redirect()->route('restaurantes.index')
            ->with('sucesso', 'Restaurante cadastrado com sucesso!');
    }

    // Exibir um registro específico
    public function show(Restaurante $restaurante)
    {
        return view('restaurantes.show', compact('restaurante'));
    }

    // Formulário de edição
    public function edit(Restaurante $restaurante)
    {
        return view('restaurantes.edit', compact('restaurante'));
    }

    // Atualizar registro existente
    public function update(RestauranteRequest $request, Restaurante $restaurante)
    {
        $dados = $request->validated();

        if ($request->hasFile('foto')) {
            // Remove a foto antiga se ela existir no storage
            if ($restaurante->foto) {
                Storage::disk('public')->delete($restaurante->foto);
            }
            $dados['foto'] = $request->file('foto')->store('restaurantes', 'public');
        }

        // Atualiza direto com os dados alinhados
        $restaurante->update($dados);

        return redirect()->route('restaurantes.index')
            ->with('sucesso', 'Restaurante atualizado com sucesso!');
    }

    // Excluir registro
    public function destroy(Restaurante $restaurante)
    {
        // Remove a foto do storage antes de deletar o registro
        if ($restaurante->foto) {
            Storage::disk('public')->delete($restaurante->foto);
        }

        $restaurante->delete();

        return redirect()->route('restaurantes.index')
            ->with('sucesso', 'Restaurante excluído com sucesso!');
    }
}