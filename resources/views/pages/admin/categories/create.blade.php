@extends('layouts.admin')

@section("content")
    <div>
        <h1>New category</h1>
        <div class="card p-4">
            <form method="post" action={{ url("/admin/categories/store") }}>
                @csrf
                <x-form-control name="name" label="Category name" placeholder="eg: Shirts"></x-form-control>
                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection
