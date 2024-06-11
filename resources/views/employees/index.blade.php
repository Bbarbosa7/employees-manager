@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-8 mx-auto px-4">
    <nav class="bg-white p-4 shadow-md">
        <div class="flex justify-between items-center">
            <a href="{{ route('employees.index') }}" class="text-lg font-semibold text-gray-700">Cadastro de Funcionários</a>
            <div>
                <a href="{{ route('employees.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Adicionar Funcionário</a>
            </div>
        </div>
    </nav>
    <div class="py-6">
        @if (!empty($employees))
            <table class="table-auto w-full border-collapse shadow-md bg-white">
                <thead class="bg-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Nome</th>
                        <th class="px-4 py-2 text-left">Cargo</th>
                        <th class="px-4 py-2 text-left">Salário</th>
                        <th class="px-4 py-2 text-left">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr class="bg-white">
                            <td class="px-4 py-2 border-b border-gray-200">{{ $employee->name }}</td>
                            <td class="px-4 py-2 border-b border-gray-200">{{ $employee->role }}</td>
                            <td class="px-4 py-2 border-b border-gray-200">{{ $employee->salary }}</td>
                            <td class="px-4 py-2 border-b border-gray-200">
                                <a href="{{ route('employees.edit', $employee->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Editar</a>
                                
                                <!-- Formulário para exclusão -->
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Excluir</button>
                                </form>
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
@vite('resources/js/main.js')
@endsection
