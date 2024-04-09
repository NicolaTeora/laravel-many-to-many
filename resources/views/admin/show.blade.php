@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Show details') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ $project->title }}</div>

                    <div class="card-body">
                        <ul>
                            <li>
                                <strong>Type work:</strong>
                                {{ dump($type->name) }}
                            </li>
                            <li>
                                <strong>Description of the project: </strong>
                                {{ $project->description }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="btn btn-primary my-3">
                    <a class="badge text-bg-primary fs-6" href="{{ route('admin.projects.index') }}">Back the projects</a>
                </div>
                {{-- Todo: cancellazione --}}
                {{-- <div class="btn btn-primary my-3">
                    <a class="badge text-decoration-none text-bg-danger fs-6" data-bs-toggle="modal"
                        data-bs-target="#modal-destroy-{{ $project->id }}" href="{{ route('admin.projects.destroy', $project) }}">Delete this
                        project</a>
                </div> --}}
            </div>
        </div>

    </div>
@endsection
