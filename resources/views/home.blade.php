@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="row row-cols-3 gy-3">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="w-100" src="{{ $project->image }}" alt="{{ $project->image }}">
                        </div>
                        <div class="card-body">
                            <h3 class="text-uppercase">{{ $project->title }}</h3>
                            <p><strong>Description: </strong>{{ $project->description }}</p>
                            <p><strong>Technologies: </strong>{{ $project->technologies }}</p>
                            <p><strong>Created: </strong>{{ $project->date }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
