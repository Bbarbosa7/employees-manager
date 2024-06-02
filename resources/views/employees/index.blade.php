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
                <a href="{{ route('employees.index') }}" class="text-lg font-semibold text-gray-700">Cadastro de
                    Funcionários</a>
                <div>
                    <a href="{{ route('employees.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Adicionar
                        Funcionário</a>
                </div>
            </div>
        </nav>
        <div class="py-6">
            @if (!empty($employees))
                <table class="table-auto w-full border border-collapse shadow-md">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left">Nome</th>
                            <th class="px-4 py-2 text-left">Cargo</th>
                            <th class="px-4 py-2 text-left">Salário</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td class="px-4 py-2">{{ $employee->name }}</td>
                                <td class="px-4 py-2">{{ $employee->role }}</td>
                                <td class="px-4 py-2">{{ $employee->salary }}</td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="bg-gray-100 border border-gray-300 text-gray-700 px-4 py-3 rounded mb-4">
                    Nenhum funcionário cadastrado.
                </div>
            @endif
        </div>
    </div>

    @vite('resources/js/app.js')

</body>

</html>
