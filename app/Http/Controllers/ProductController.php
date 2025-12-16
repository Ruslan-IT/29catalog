<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function category($id)
    {
        // Получаем категорию
        $category = Category::with('children')->findOrFail($id);

        // Получаем все продукты этой категории (включая продукты дочерних категорий)
        $categoryIds = $category->children->pluck('id')->push($category->id);

        $products = Product::whereIn('category_id', $categoryIds)->get();

        return view('pages.category', compact('category', 'products'));
    }

    public function show(string $slug)
    {
        $product = Product::with([
            'category.parent',
        ])->where('slug', $slug)->firstOrFail();

        return view('pages.product', compact('product'));
    }
}
