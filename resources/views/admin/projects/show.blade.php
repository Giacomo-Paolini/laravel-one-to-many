@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>{{ $project->title }}</h1>
        <h2>Type: {{ $project->type ? $project->type->name : "No type" }}</h2>
        <p>{{ $project->content }}</p>
        <img src="{{ $project->image }}" alt="{{ $project->title }}" />
    </div>
</div>

@endsection