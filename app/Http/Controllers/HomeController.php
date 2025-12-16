<?php

namespace App\Http\Controllers;

class HomeController
{

    public function index()
    {
        $products = 'Product';

        $title = 'Catalog';

        return view('pages.index', compact('products',  'title'));
    }

}
