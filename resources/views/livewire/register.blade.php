<div class="flex items-center justify-center min-h-screen bg-gray-100">
    {{-- Deixa tudo centralizado no meio da tela, ocupando a altura toda --}}
    
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        {{-- Caixa branca com bordas arredondadas, sombra suave e um bom espaço interno --}}
        
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-800">Crie sua conta</h2>

        <form wire:submit="register">
            {{-- Quando clicar no botão de cadastrar, vai chamar a função register() lá no PHP --}}
            
            {{-- CAMPO NOME --}}
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Nome</label>
                <input type="text" wire:model="name"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror">
                {{-- O wire:model="name" conecta esse campo com a variável $name no componente Livewire --}}
                {{-- Se tiver erro de validação, a borda fica vermelha --}}
                
                @error('name') 
                    <span class="text-xs italic text-red-500">{{ $message }}</span> 
                @enderror
                {{-- Mostra a mensagem de erro em vermelho bem pequena --}}
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
                {{-- Esse campo tem um espaço maior embaixo antes dos botões --}}
                <label class="block mb-2 text-sm font-bold text-gray-700">Confirmar Senha</label>
                <input type="password" wire:model="password_confirmation"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            </div>

            {{-- ÁREA DOS BOTÕES --}}
            <div class="flex flex-col gap-4">
                {{-- Coloca os elementos um embaixo do outro com um espaçinho entre eles --}}
                
                <button type="submit"
                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                    {{-- Botão azul que fica mais escuro quando você passa o mouse por cima --}}
                    
                    <span wire:loading.remove wire:target="register">Cadastrar</span>
                    {{-- Quando NÃO está processando, mostra "Cadastrar" --}}
                    
                    <span wire:loading wire:target="register">Criando conta...</span>
                    {{-- Enquanto está criando a conta, mostra essa mensagem de carregamento --}}
                </button>

                {{-- LINK PARA IR PRO LOGIN --}}
                <div class="text-center text-sm">
                    Já tem uma conta?
                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-800 font-bold" wire:navigate>
                        {{-- O wire:navigate faz a navegação sem recarregar a página toda --}}
                        Faça login
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>