<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'T-shirt Laravel', 'price' => 29.90],
            ['name' => 'Mug PHP', 'price' => 12.50],
            ['name' => 'Sticker Composer', 'price' => 2.00],
        ];

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        return 'Produit n°' . $id;
    }
}