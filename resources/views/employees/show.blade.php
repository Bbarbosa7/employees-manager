@extends('layouts.app')

@section('title', 'Employee Details')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h1 class="text-2xl font-semibold mb-4">Employee Details</h1>
    <div class="mb-4">
        <strong>Name:</strong>
        <p>{{ $employee->name }}</p>
    </div>
    <div class="mb-4">
        <strong>Profession:</strong>
        <p>{{ $employee->profession }}</p>
    </div>
    <div class="mb-4">
        <strong>Monthly Salary:</strong>
        <p>{{ $employee->monthly_salary }}</p>
    </div>
    <div>
        <a href="{{ route('employees.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back to List</a>
    </div>
</div>
@endsection
