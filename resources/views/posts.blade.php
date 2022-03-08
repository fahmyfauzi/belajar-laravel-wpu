@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center mb-4">{{ $title }}</h3>
            <form action="/posts">
                @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>

        </div>
    </div>
</div>

@if($posts->count())
<div class="card my-4 text-center" style="width:full;">
    @if($posts[0]->image)
    <div style="max-height:400px; overflow:hidden;">
        <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x300/?{{ $posts[0]->name }}" class="card-img-top" alt="...">
    @endif

    <div class="card-body">
        <h5 class="card-title "><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <small>
            <p>By, <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->slug }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
        </small>

        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Readmore</a>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)

        <div class="col-md-4">
            <div class="card mb-3 text-center">
                <div class="position-absolute bg-dark px-3 py-2 text-white"> <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->slug }}</a>
                </div>
                @if($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}">
                @else
                <img src="https://source.unsplash.com/500x400/?{{ $post->category->name}}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title "><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                    <small>
                        <p>By, <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->slug }}</a> {{ $post->created_at->diffForHumans() }}</p>
                    </small>

                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/post/{{ $post->slug }}" class="btn btn-primary">Readmore</a>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h3>Post Not Found</h3>
        @endif
    </div>

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
</div>

@endsection
