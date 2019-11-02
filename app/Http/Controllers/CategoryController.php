<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::with(['book' => function($query) {
            $query->where('is_show', 1);
        }])->select('id', 'name')->orderByDesc('id')->where('is_show', 1)->paginate(30);

        return CategoryResource::collection($data);
    }
}
