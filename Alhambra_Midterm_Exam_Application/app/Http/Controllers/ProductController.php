<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Boku no hero Academia'],
            ['title' => 'Shangrila Frontier'],
            ['title' => 'Mushoku Tensei'],
            ['title' => 'Slime'],
        ];

        return view('products', compact('products'));
    }
}