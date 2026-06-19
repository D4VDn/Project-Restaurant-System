<div class="space-y-5">
    {{-- Campo: Nome do Restaurante --}}
    <div>
        <label for="nome" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
            Nome do Restaurante <span class="text-red-500">*</span>
        </label>
        <input type="text" name="nome" id="nome"
               class="mt-1 block w-full rounded-lg border bg-white px-4 py-2.5 text-sm text-gray-900 shadow-sm outline-none transition @error('nome') border-red-500 focus:border-red-500 focus:ring-1 focus:ring-red-500 @else border-gray-300 focus:border-orange-500 focus:ring-1 focus:ring-orange-500 @enderror"
               value="{{ old('nome', $restaurante->nome ?? '') }}">
        @error('nome')
            <div class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</div>
        @enderror
    </div>

    {{-- Campo: Categoria --}}
    <div>
        <label for="tipo_culinaria" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
            Categoria <span class="text-red-500">*</span>
        </label>
        <input type="text" name="tipo_culinaria" id="tipo_culinaria" placeholder="Ex: Restaurante Italiano"
               class="mt-1 block w-full rounded-lg border bg-white px-4 py-2.5 text-sm text-gray-900 shadow-sm outline-none transition @error('tipo_culinaria') border-red-500 focus:border-red-500 focus:ring-1 focus:ring-red-500 @else border-gray-300 focus:border-orange-500 focus:ring-1 focus:ring-orange-500 @enderror"
               value="{{ old('tipo_culinaria', $restaurante->tipo_culinaria ?? '') }}">
        @error('tipo_culinaria')
            <div class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</div>
        @enderror
    </div>

    {{-- Campo: Telefone --}}
    <div>
        <label for="telefone" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
            Telefone <span class="text-red-500">*</span>
        </label>
        <input type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000"
               class="mt-1 block w-full rounded-lg border bg-white px-4 py-2.5 text-sm text-gray-900 shadow-sm outline-none transition @error('telefone') border-red-500 focus:border-red-500 focus:ring-1 focus:ring-red-500 @else border-gray-300 focus:border-orange-500 focus:ring-1 focus:ring-orange-500 @enderror"
               value="{{ old('telefone', $restaurante->telefone ?? '') }}">
        @error('telefone')
            <div class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</div>
        @enderror
    </div>

    {{-- Campo: Foto do Produto --}}
    <div>
        <label for="foto" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
            Foto do Produto <span class="text-red-500">*</span>
        </label>
        <input type="file" name="foto" id="foto" accept="image/*"
               class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100 transition border rounded-lg bg-white p-1.5 shadow-sm @error('foto') border-red-500 @else border-gray-300 @enderror">
        @error('foto')
            <div class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</div>
        @enderror
    </div>
</div>