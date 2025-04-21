@extends('layouts.app')

@section('content')

<div class="row h-100 align-items-center justify-content-center">
    <div class="col col-lg-8 col-md-10 col-sm-12">
        <div class="d-flex card p-5">
            <div class="mb-3">
                <h1 class="text-center">Create New Post</h1>
            </div>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="idtitle">Title</label>
                    <input type="text" id="idtitle" name="title" class="form-control" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="idbody">Body</label>
                    <textarea id="idbody" name="body" class="form-control" rows="5">{{ old('body') }}</textarea>
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Publish</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection