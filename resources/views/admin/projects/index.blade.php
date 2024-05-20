@extends('layouts.admin')


@section('content')
    {{-- Projects --}}
    <div class="container">

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
                            <td>{{ $project->image }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->technologies }}</td>
                            <td>{{ $project->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection