@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="bg-white p-6 rounded shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Cadastro de Novo Funcionário</h1>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700" for="name">Nome completo:</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="role">Cargo:</label>
                    <input type="text" name="role" id="role"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('role') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="email">Email:</label>
                    <input type="email" name="email" id="email"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('email') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="phone">Telefone:</label>
                    <input type="text" maxlength="15" name="phone" id="phone" placeholder="(XX) XXXXX-XXXX" pattern="\(\d{2}\) \d{5}-\d{4}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('phone') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="salary">Salário:</label>
                    <input type="text" name="salary" id="salary"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('salary') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="address">Endereço:</label>
                    <input type="text" name="address" id="address"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('address') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="neighborhood">Bairro:</label>
                    <input type="text" name="neighborhood" id="neighborhood"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('neighborhood') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="city">Cidade:</label>
                    <input type="text" name="city" id="city"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('city') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="state">Estado:</label>
                    <input type="text" name="state" id="state" placeholder="Ex.: ES" maxlength="2"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('state') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="zip">CEP:</label>
                    <input type="text" name="zip" id="zip" maxlength="8"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('zip') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="country">País:</label>
                    <input type="text" name="country" id="country"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('country') }}">
                </div>
                <div class="mb-4"></div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
    @vite('resources/js/main.js')
@endsection
