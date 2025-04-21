@extends('layouts.app')

@section('content')

<div class="row h-100 align-items-center justify-content-center">
    <div class="col col-lg-8 col-md-10 col-sm-12">
        <div class="d-flex card p-5">
            <div class="text-center">
                <h1>Edit Post</h1>
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

            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="idtitle">Title</label>
                    <input id="idtitle" type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="idbody">Body</label>
                    <textarea id="idbody" name="body" class="form-control" rows="5">{{ $post->body }}</textarea>
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection