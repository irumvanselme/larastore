<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();

        return view("pages.admin.tags.index", compact("tags"));
    }

    public function create(){
        return view("pages.admin.tags.create");
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request){
        $data = $this->validate($request, [
            "name" => "required|string|min:3"
        ]);

        Tag::query()->create($data);

        return redirect("/admin/tags");
    }
}
