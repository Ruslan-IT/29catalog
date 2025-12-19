<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function category($id)
    {

        $siteSettings = SiteSetting::first();

        // Получаем категорию
        $category = Category::with('children')->findOrFail($id);
        // Получаем все продукты этой категории (включая продукты дочерних категорий)
        $categoryIds = $category->children->pluck('id')->push($category->id);



        // Получаем все продукты этой категории
        $products = Product::whereIn('category_id', $categoryIds)->get();




        return view('pages.category', compact('category',
            'products',
            'siteSettings',
        ));
    }

    public function show(string $slug)
    {

        $siteSettings = SiteSetting::first();
        $product = Product::with([
            'category.parent',
        ])->where('slug', $slug)->firstOrFail();

        return view('pages.product', compact(
            'product',
            'siteSettings'
        ));
    }
}
