<div class="flex items-center justify-center min-h-screen bg-gray-100">
    {{-- tela inteira centralizada --}}

    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-800">Entrar</h2>

        {{-- formulário de login --}}
        <form wire:submit="login">
            {{-- wire:submit="login" = quando enviar, chama o método login() do PHP --}}

            {{-- caixa de email --}}
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                {{-- wire:model conecta com o PHP --}}
                <input type="email" id="email" wire:model="email"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror">

                {{-- mostra erro se tiver --}}
                @error('email') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
            </div>

            {{-- caixa de senha --}}
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-bold text-gray-700">Senha</label>
                <input type="password" id="password" wire:model="password"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror">

                @error('password') <span class="text-xs italic text-red-500">{{ $message }}</span> @enderror
            </div>

            {{-- botão de entrar --}}
            <div class="flex flex-col gap-4">
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                        {{-- efeito de loading --}}
                        <span wire:loading.remove wire:target="login">Entrar</span>
                        <span wire:loading wire:target="login">Carregando...</span>
                    </button>
                </div>

                {{-- link pra cadastro --}}
                <div class="text-xs text-center">
                    Não tem uma conta?
                    <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-800 font-bold" wire:navigate>
                        Cadastre-se
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>