@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <article>
                <h2 class="my-4">{{ $post->title }}</h2>
                <div class="mb-3">
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger " onClick="return confirm('Are you sure?')"><i data-feather="x-circle"></i>Delete</button>
                    </form>
                </div>

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


        </div>


    </div>
</div>

@endsection
