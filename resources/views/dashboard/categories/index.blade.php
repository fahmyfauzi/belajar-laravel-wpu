@extends('dashboard.layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Post Category</h1>
</div>
<div class="table-responsive col-lg-6">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create Category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-primary"><i data-feather="eye"></i></a>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i data-feather="edit"></i></a>
                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onClick="return confirm('Are you sure?')"><i data-feather="x-circle"></i></button>
                    </form>


                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
