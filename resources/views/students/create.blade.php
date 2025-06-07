@extends('layouts.app')

@section('content')
<div class="p-6 max-w-lg mx-auto">
    <h2 class="text-xl font-bold mb-4">Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
        @csrf
        <input name="name" placeholder="Name" class="w-full p-2 border" required>
        <input name="age" type="number" placeholder="Age" class="w-full p-2 border" required>
        <input name="course" placeholder="Course" class="w-full p-2 border" required>
        <button class="bg-green-600 text-white px-4 py-2 rounded">Submit</button>
    </form>
</div>
@endsection
