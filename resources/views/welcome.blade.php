<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>

    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased bg-white text-black">
    <div class="min-h-screen flex items-center justify-center bg-white">
        
        {{-- Cookie notice modal --}}
        <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 invisible" id="cookieNoticeModal"
            tabindex="-1" role="dialog">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full max-w-md">
                <div class="px-6 py-4 border-b">
                    <h5 class="text-lg font-semibold">Aviso de Cookie</h5>
                    <button type="button"
                        class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 focus:outline-none"
                        aria-label="Close">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <p>Este site usa cookies para melhorar sua experiência. Ao continuar navegando você concorda com os
                        utilização de cookies.</p>
                </div>
                <div class="px-6 py-4 border-t flex justify-end space-x-2">
                    <button type="button"
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 focus:outline-none"
                        id="closeButton">Fechar</button>
                    <button type="button"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none"
                        id="acceptCookies">Aceitar</button>
                </div>
            </div>
        </div>

        {{-- Main content --}}
        <div class="bg-white p-10 rounded-lg shadow-lg">
            <img src="{{ asset('staff-logo-black.png') }}" alt="Cadastro de Funcinários" class="w-32 h-32 mx-auto mb-6">
            <h1 class="text-2xl font-bold text-center">Bem-vindo ao </h1>
            <h1 class="text-2xl font-bold mb-8 text-center">Sistema de Cadastro de Funcionários</h1>
            <div class="flex flex-col space-y-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition duration-300 text-center">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition duration-300 text-center">
                            Entrar
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition duration-300 text-center">
                                Cadastrar-se
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
    @vite('resources/js/main.js')
</body>

</html>
