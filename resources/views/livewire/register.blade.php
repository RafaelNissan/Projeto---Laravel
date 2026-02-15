<div class="flex items-center justify-center min-h-screen bg-gray-100">
    {{-- centraliza na tela --}}

    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        {{-- caixa branca com sombra --}}

        <h2 class="mb-6 text-2xl font-bold text-center text-gray-800">Crie sua conta</h2>

        <form wire:submit="register">
            {{-- Quando clicar no botão de cadastrar, vai chamar a função register() lá no PHP --}}

            {{-- CAMPO NOME --}}
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Nome</label>
                <input type="text" wire:model="name"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror">

                @error('name')
                    <span class="text-xs italic text-red-500">{{ $message }}</span>
                @enderror
            </div>

            {{-- CAMPO EMAIL --}}
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                <input type="email" wire:model="email"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror">
                @error('email')
                    <span class="text-xs italic text-red-500">{{ $message }}</span>
                @enderror
            </div>

            {{-- CAMPO SENHA --}}
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Senha</label>
                <input type="password" wire:model="password"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-xs italic text-red-500">{{ $message }}</span>
                @enderror
            </div>

            {{-- CONFIRMAR SENHA --}}
            <div class="mb-6">
                <label class="block mb-2 text-sm font-bold text-gray-700">Confirmar Senha</label>
                <input type="password" wire:model="password_confirmation"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            </div>

            {{-- ÁREA DOS BOTÕES --}}
            <div class="flex flex-col gap-4">
                {{-- Coloca os elementos um embaixo do outro com um espaçinho entre eles --}}

                <button type="submit"
                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">

                    <span wire:loading.remove wire:target="register">Cadastrar</span>
                    <span wire:loading wire:target="register">Criando conta...</span>
                </button>

                {{-- LINK PARA IR PRO LOGIN --}}
                <div class="text-center text-sm">
                    Já tem uma conta?
                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-800 font-bold" wire:navigate>
                        Faça login
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>