@extends('layouts.admin')

@section("content")
    <div class="mt-3">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>All products</h1>
            <div><a href="{{ url("/admin/products/new") }}">Create New</a></div>
        </div>
        <div class="card p-4 mt-3">
            <table class="table table-bordered">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>STATUS</th>
                    <th>VENDOR</th>
                    <th>PRICE</th>
                    <th>COST</th>
                    <th>CATEGORY</th>
                    <th>CREATED AT</th>
                </tr>
                </thead>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->vendor }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->cost }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
