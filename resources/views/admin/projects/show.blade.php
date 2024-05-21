@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        @include('partials.action-message')

        <div class="col-4">
            <div class="card">
                <div class="card-img">
                    <img class="w-100" src="{{ $project->image }}" alt="{{ $project->image }}">
                </div>
                <div class="card-body">
                    <h3>{{ $project->title }}</h3>
                    <p><strong>Description: </strong>{{ $project->description }}</p>
                    <p><strong>Technologies: </strong>{{ $project->technologies }}</p>
                    <p><strong>Created: </strong>{{ $project->date }}</p>
                    <a class="btn btn-dark" href="{{ route('admin.projects.edit', $project) }}">Edit</a>
                    @include('partials.delete-modal')
                    <a class="btn btn-dark" href="{{ route('admin.projects.index') }}">All Projects</a>

                </div>
            </div>
        </div>
    </div>
@endsection
