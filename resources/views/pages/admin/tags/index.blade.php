@extends('layouts.admin')

@section("content")
    <div class="mt-3">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>All Tags</h1>
            <div><a href="{{ url("/admin/tags/new") }}">Create New</a></div>
        </div>
        <div class="card p-4 mt-3">
            <table class="table table-bordered">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>TAG NAME</th>
                </tr>
                </thead>
                @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
