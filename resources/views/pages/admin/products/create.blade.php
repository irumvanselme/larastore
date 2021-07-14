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
                            <x-form-control name="name" label="Title" placeholder="eg: A cool t-shirt"></x-form-control>
                            <x-form-textarea name="description" label="Description"></x-form-textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card p-4">
                            <x-form-control name="vender" label="Vendor" placeholder="eg: Nike"></x-form-control>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
