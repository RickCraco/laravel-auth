@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects List</h1>
        @foreach ($projects as $project)
            <p><a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a></p>
        @endforeach
    </section>
@endsection