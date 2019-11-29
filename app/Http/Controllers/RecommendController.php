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
        $validator = Validator::make($request->all(), [
            'book' => 'bail|required|string',
            'author' => 'bail|required|string',
            'recommend' => 'bail|required|string',
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            abort(400, '参数错误');
        }
        $recommend = Recommend::create($request->all());
        return new RecommendResource($recommend);
    }
}
