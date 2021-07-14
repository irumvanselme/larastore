<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view("pages.admin.categories.index", compact("categories"));
    }

    public function create(){
        return view("pages.admin.categories.create");
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request){
        $data = $this->validate($request, [
            "name" => "required|string|min:3"
        ]);

        Category::query()->create($data);

        return redirect("/admin/categories");
    }
}
