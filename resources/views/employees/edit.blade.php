@extends('layouts.app')

@section('title', 'Edit Employee')

@section('content')
    <div class="bg-white p-6 rounded shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Editar Funcionário</h1>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700" for="name">Nome:</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('name', $employee->name) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="role">Cargo:</label>
                    <input type="text" name="role" id="role"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('role', $employee->role) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="email">Email:</label>
                    <input type="email" name="email" id="email"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('email', $employee->email) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="phone">Telefone:</label>
                    <input type="tel" maxlength="15" placeholder="Use somente números" name="phone" id="phone"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('phone', $employee->phone) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="salary">Salário:</label>
                    <input type="text" name="salary" id="salary"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('salary', $employee->salary) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="address">Endereço:</label>
                    <input type="text" name="address" id="address"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('address', $employee->address) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="city">Cidade:</label>
                    <input type="text" name="city" id="city"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('city', $employee->city) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="state">Estado:</label>
                    <input type="text" name="state" id="state"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('state', $employee->state) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="zip">CEP:</label>
                    <input type="text" name="zip" id="zip"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('zip', $employee->zip) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="country">País:</label>
                    <input type="text" name="country" id="country"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('country', $employee->country) }}">
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
                </div>
            </div>

        </form>
    </div>
@endsection
