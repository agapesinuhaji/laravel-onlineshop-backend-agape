<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // $products = Product::paginate(10);
        $categories = Category::all();
        return response()->json([
            'status' => 'success',
            'data' => $categories,
        ], 200);
    }
}
