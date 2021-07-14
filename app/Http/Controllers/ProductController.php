<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view("pages.admin.products.index", compact("products"));
    }

    public function create(){
        $categories = Category::all();

        return view("pages.admin.products.create", compact("categories"));
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request){
        $data = $this->validate($request, [
            "title" => "required|string|min:3",
            "description" => "required|string|min:10",
            "vendor" => "required|string|min:3",
            "category" => "required|int",
            "cost" => "required|int",
            "price" => "required|int"
        ]);

        $data["status"] = "ACTIVE";

        $category = Category::query()->find($data["category"]);

        $category->products()->create($data);

        return redirect("/admin/products");
    }
}
