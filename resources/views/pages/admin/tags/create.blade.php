@extends('layouts.admin')

@section("content")
    <div>
        <h1>New Tag</h1>
        <div class="card p-4">
            <form method="post" action={{ url("/admin/tags/store") }}>
                @csrf
                <x-form-control name="name" label="Tag name"></x-form-control>
                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection
