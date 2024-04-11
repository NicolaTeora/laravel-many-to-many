@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger my-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1 class="fs-4 text-secondary my-4">
            {{ __('Edit project') }}
        </h1>
        <form class="row" action="{{ route('admin.projects.update', $project) }}" method="POST">
            @method('PATCH')
            @csrf
            {{-- edit Titolo --}}
            <div class="col-4">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $project['title'] }}">
            </div>
            {{-- edit Tipo --}}
            <div class="col-4">
                <label for="type_id" class="form-label">Tipo</label>
                <select class="form-select" id="type_id" name="type_id">
                    @foreach ($types as $type)
                        <option {{ $type->id == old('type_id', $project->type_id) ? 'selected' : '' }}
                            value="{{ $type->id }}">
                            {{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- edit Descrizione --}}
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $project['description'] }}"</textarea>
            </div>
            {{-- bottone conferma edit --}}
            <div class="col-12 my-3">
                <button class="btn btn-success">Modifica</button>
            </div>
        </form>
        <a class="btn text-bg-primary text-decoration-none fs-6" href="{{ route('admin.projects.index') }}">Annulla</a>
    </div>
@endsection
