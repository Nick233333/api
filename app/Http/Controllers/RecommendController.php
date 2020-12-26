<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecommendResource;
use App\Recommend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecommendController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'book' => 'bail|required|string',
                'author' => 'bail|required|string',
            ]
        );

        $recommend = Recommend::create($request->all());
        return new RecommendResource($recommend);
    }
}
