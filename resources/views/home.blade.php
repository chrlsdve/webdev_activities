@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl">Welcome, {{ Auth::user()->name }}</h1>
    <a href="/students" class="bg-blue-500 text-white px-4 py-2 mt-4 inline-block">Manage Students</a>
</div>
@endsection
