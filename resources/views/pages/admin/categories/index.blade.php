@extends('layouts.admin')

@section("content")
    <div class="mt-3">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>All categories</h1>
            <div><a href="{{ url("/admin/categories/new") }}">Create New</a></div>
        </div>
        <div class="card p-4 mt-3">
            <table class="table table-bordered">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>CATEGORY NAME</th>
                </tr>
                </thead>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
