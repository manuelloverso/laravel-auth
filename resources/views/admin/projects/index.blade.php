@extends('layouts.admin')


@section('content')
    {{-- Projects --}}
    <div class="container py-3">
        @include('partials.action-message')
        <div class="py-3">
            <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Create</a>

        </div>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image </th>
                        <th scope="col">Description</th>
                        <th scope="col">Technologies</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr class="">
                            <td scope="row">{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>
                                @if (str_starts_with($project->image, 'uploads/'))
                                    <img width="150" src="{{ asset('storage/' . $project->image) }}" alt="">
                                @else
                                    <img src="{{ $project->image }}" alt="">
                                @endif
                            </td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->technologies }}</td>
                            <td>{{ $project->date }}</td>
                            <td>
                                <a class="btn btn-dark" href="{{ route('admin.projects.show', $project) }}">View</a>
                                <a class="btn btn-dark" href="{{ route('admin.projects.edit', $project) }}">Edit</a>
                                @include('partials.delete-modal')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
