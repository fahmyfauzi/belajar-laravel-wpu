@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article>
                <h2 class="mb-4">{{ $post->title }}</h2>
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>
                @if($post->image)
                <div style="max-height:400px; overflow:hidden;">
                </div>
                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}">
                @else
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name}}" class="card-img-top mb-4" alt="...">
                @endif

                {{-- <p>{{ $post->body }}</p> --}}
                {!! $post->body !!}
            </article>

            <a href="/posts" class="text-decoration-none">Back to Post</a>
        </div>


    </div>
</div>

@endsection
