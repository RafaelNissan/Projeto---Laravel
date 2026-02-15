<div class="min-h-screen bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Editar Produto</h2>

        <form wire:submit="update">
            {{-- nome --}}
            <div class="mb-4">
                <label class="block mb-2 font-bold text-gray-700">Nome do Produto</label>
                <input type="text" wire:model="name" class="w-full border rounded p-2">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- descrição --}}
            <div class="mb-4">
                <label class="block mb-2 font-bold text-gray-700">Descrição</label>
                <textarea wire:model="description" class="w-full border rounded p-2"></textarea>
            </div>

            {{-- preço --}}
            <div class="mb-4">
                <label class="block mb-2 font-bold text-gray-700">Preço (R$)</label>
                <input type="text" wire:model="price" class="w-full border rounded p-2">
                @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- imagem --}}
            <div class="mb-6">
                <label class="block mb-2 font-bold text-gray-700">Imagem do Produto</label>

                {{-- se selecionou uma nova, mostra ela. senão, mostra a atual --}}
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" class="w-32 mb-2 rounded border border-blue-500">
                    <span class="text-sm text-blue-500">Nova imagem selecionada</span>
                @elseif ($product->image)
                    <img src="{{ Storage::url($product->image) }}" class="w-32 mb-2 rounded">
                    <span class="text-sm text-gray-500">Imagem atual</span>
                @endif

                <input type="file" wire:model="image" class="w-full mt-2">
                @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-between">
                <a href="{{ route('products.index') }}" class="text-gray-500 hover:text-gray-700"
                    wire:navigate>Cancelar</a>

                <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                    <span wire:loading.remove wire:target="update">Atualizar Produto</span>
                    <span wire:loading wire:target="update">Salvando...</span>
                </button>
            </div>
        </form>
    </div>
</div>