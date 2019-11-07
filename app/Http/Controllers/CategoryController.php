<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::with(['book' => function($query) {
            $query->where('is_show', 1);
        }])->select('id', 'name')->where('is_show', 1)->paginate(30);

        return CategoryResource::collection($categorys);
    }

    public function show($id)
    {
        $categorys = Category::with(['book' => function($query) {
            $query->where([['is_show', 1]]);
        }])->select('id','name')->where([['is_show', 1],['id', $id]])->get();

        return CategoryResource::collection($categorys);
    }
}
