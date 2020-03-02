<?php

namespace App\Http\Controllers;

use App\Product;
use Exception;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function index()
    {
        return view('product.index', [
            'products' => Product::latest()->paginate(5)
        ]);
    }

    public function show(Product $product)
    {
        return view('product.show', [
            'product' => $product
        ]);
    }

    public function create()
    {
        return view('product.create');
    }

    //TODO REFACTOR
    public function store()
    {
//        Product::create(
//            $this->validateProduct()
//    );
        $product = new Product();
        $product->user_id = Auth::user()->id;
        $product->title = $this->validateProduct()['title'];
        $product->description = $this->validateProduct()['description'];
        $product->price = $this->validateProduct()['price'];
        $product->save();

        return redirect('/products');
    }

    public function edit(Product $product)
    {
        return view('product.edit', [
            'product' => $product
        ]);
    }

    public function update(Product $product)
    {
        $product->update($this->validateProduct());

        return redirect($product->path());
    }

    public function delete(Product $product)
    {
        try {
            $product->delete();
        } catch (Exception $e) {
            $e->getMessage();
        }

        return redirect('/products');
    }

    /**
     * @return array
     */
    public function validateProduct(): array
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
    }
}
