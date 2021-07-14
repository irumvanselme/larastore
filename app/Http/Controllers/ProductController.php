<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function index(){
        return view("pages.admin.products.index");
    }

    public function create(){
        return view("pages.admin.products.create");
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request){
        $data = $this->validate($request, [
            "name" => "required|string|min:3"
        ]);

        Category::query()->create($data);

        return redirect("/admin/products");
    }
}
