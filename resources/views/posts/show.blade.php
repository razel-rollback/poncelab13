@extends('layouts.app')

@section('content')

<div class="row h-100 align-items-center justify-content-center">
    <div class="col col-lg-8 col-md-10 col-sm-12">
        <div class="d-flex card p-5">
            <div class="text-center mb-3">
                <h1>{{ $post->title }}</h1>
            </div>

            <div class="mb-3">
                <p>{{ $post->body }}</p>
            </div>

            <div>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
            </div>
        </div>
    </div>
</div>

@endsection