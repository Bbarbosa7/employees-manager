<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Employee Manager')</title>
    
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <div class="container mx-auto px-4">
        <nav class="bg-white p-4 shadow-md">
            <div class="flex justify-between items-center">
                <a href="{{ route('employees.index') }}" class="text-lg font-semibold text-gray-700">Cadastro de Funcionários</a>
                <div>
                    <a href="{{ route('employees.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Adicionar Funcionário</a>
                </div>
            </div>
        </nav>
        <div class="py-6">
            @yield('content')
        </div>
    </div>
    
    @vite('resources/js/app.js')
    
</body>
</html>
