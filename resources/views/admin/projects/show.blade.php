@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $project->title }}</h1>
        <div class="card w-50">
            <img src="{{ $project->img }}" class="card-img-top" alt="{{ $project->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ $project->body }}</p>
                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </section>
@endsection