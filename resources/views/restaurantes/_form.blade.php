<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Nome do Restaurante+ *</label>
            <input type="text" name="nome"
                   class="form-control @error('nome') is-invalid @enderror"
                   value="{{ old('nome', $restaurante->nome ?? '') }}">
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Categoria *</label>
            {{-- CORREÇÃO: Alterado todos os locais de 'categoria' para 'tipo_culinaria' --}}
            <input type="text" name="tipo_culinaria" placeholder="Ex: Restaurante Italiano"
                   class="form-control @error('tipo_culinaria') is-invalid @enderror"
                   value="{{ old('tipo_culinaria', $restaurante->tipo_culinaria ?? '') }}">
            @error('tipo_culinaria')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
        <div class="col-md-3">
            <div class="form-group">
            <label>Telefone *</label>
            <input type="text" name="telefone" placeholder="(00) 00000-0000"
                    class="form-control @error('telefone') is-invalid @enderror"
                    value="{{ old('telefone', $restaurante->telefone ?? '') }}">
                @error('telefone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <label>Foto do Produto *</label>
    <input type="file" name="foto"
           class="form-control-file @error('foto') is-invalid @enderror"
           accept="image/*">
    @error('foto')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>