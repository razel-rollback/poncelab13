@extends('layouts.app')

@section('content')
<div class="row h-100 align-items-center justify-content-center">
    <div class="col col-lg-8 col-md-10 col-sm-12">
        <div class="d-flex card p-5">
            <div>
                <h1 class="col text-center mb-3">All Posts</h1>
            </div>

            <div class="col d-flex justify-content-end"> <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a></div>

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <div>
                        <h4>{{ $post->title }}</h4>
                    </div>
                    <div>
                        <p>{{ Str::limit($post->body, 100) }}</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection