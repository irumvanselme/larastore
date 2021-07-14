@extends('layouts.admin')

@section("content")
    <div>
        <h2 class="mt-4">New product</h2>
        <div class="my-4">
            <form method="post" action={{ url("/admin/products/store") }}>
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card p-4">
                            <x-form-control name="title" label="Title" placeholder="eg: A cool t-shirt"></x-form-control>
                            <x-form-textarea name="description" label="Description"></x-form-textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card p-4">
                            <x-form-select name="category" label="Category" placeholder=" - select category - " :iterable="$categories"></x-form-select>
                            <x-form-control name="vendor" label="Vendor" placeholder="eg: Nike"></x-form-control>
                        </div>
                        <div class="card mt-4 p-4">
                            <x-form-control name="price" label="Price" placeholder="What should be show on site"></x-form-control>
                            <x-form-control name="cost" label="Cost" placeholder="This is hidden to other users"></x-form-control>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
