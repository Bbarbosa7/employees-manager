@extends('layouts.app')

@section('title', 'Edit Employee')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h1 class="text-2xl font-semibold mb-4">Edit Employee</h1>
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
        <div class="mb-4">
            <label class="block text-gray-700" for="name">Name:</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $employee->name) }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700" for="profession">Profession:</label>
            <input type="text" name="profession" id="profession" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('profession', $employee->profession) }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700" for="monthly_salary">Monthly Salary:</label>
            <input type="text" name="monthly_salary" id="monthly_salary" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('monthly_salary', $employee->monthly_salary) }}">
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Employee</button>
        </div>
    </form>
</div>
@endsection
