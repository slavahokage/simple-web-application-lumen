<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function addProducts()
    {
        return view('products-new');
    }

    public function deleteProducts(Request $request)
    {
        $request->session()->forget('products');

        return redirect()->route('products_show');
    }

    public function displayProducts(Request $request)
    {
        $products = $request->session()->get('products');

        return view('products-show', compact('products'));
    }

    public function storeProducts(Request $request)
    {
        $cookieProducts = $request->session()->get('products');

        if (!isset($cookieProducts)) {

            $cookieProducts = array_values($request->input('products'));

            $cookieProducts = array_flip($cookieProducts);

            $cookieProducts = array_map(function () {
                return 1;
            }, $cookieProducts);

        } else {
            $requestProducts = $request->input('products');

            foreach ($requestProducts as $product) {
                if (array_key_exists($product, $cookieProducts)) {
                    $cookieProducts[$product]++;
                } else {
                    $cookieProducts[$product] = 1;
                }
            }
        }

        $request->session()->put('products', $cookieProducts);

        return redirect()->route('products_show');
    }
}