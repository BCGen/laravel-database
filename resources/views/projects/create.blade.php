@extends('layout')
@section('content')
    
<h1 class="title">Create a New Project</h1>

<form method="POST" action="/projects">

    @csrf

    <div class="field">
        <label class="label" for="title">Project Title</label>
        <div class="control">

            <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" value="{{ old('title') }}" required>
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Project Description</label>

        <div class="control">
            <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" required>{{ old('description') }}</textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">Create Project</button>
        </div>
    </div>

    @include('errors')

</form>

@endsection
