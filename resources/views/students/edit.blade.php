@extends('layouts.app')

@section('content')
<form method="POST" action="/students/{{ $student->id }}" class="p-6 space-y-4 max-w-md">
    @csrf @method('PUT')
    <input name="name" value="{{ $student->name }}" class="w-full p-2 border" required>
    <input name="age" type="number" value="{{ $student->age }}" class="w-full p-2 border" required>
    <input name="course" value="{{ $student->course }}" class="w-full p-2 border" required>
    <button class="bg-yellow-500 text-white px-4 py-2">Update</button>
</form>
@endsection
