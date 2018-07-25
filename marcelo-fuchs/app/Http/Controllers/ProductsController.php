<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;

/**
 * Products Controller
 */
class ProductsController extends Controller
{

    /**
     * @var Products
     */
    private $product;

    /**
     * @param Products $product
     */
    public function __construct(Products $product)
    {
        $this->product = $product;
    }

    /**
     * Index 
     * 
     * Products List
     * 
     * @return type
     */
    public function index()
    {
        $posts = $this->product->paginate(5);
        return view('products.index',compact('posts'));
    }

    /**
     * Create
     * 
     * Form to create product
     * 
     * @return type
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store
     * 
     * Create Product
     * 
     * @param ProductsRequest $request
     * @return type
     */
    public function store(ProductsRequest $request)
    {
        $post = $this->product->create($request->all());
        $post->tags()->sync($this->getTagList($request->tags));

        return redirect()->route('products.index');
    }

    /**
     * Edit 
     * 
     * Edit product
     * 
     * @param type $id
     * @return type
     */
    public function edit($id)
    {
        $post=$this->product->find($id);
        return view('products.edit', compact('post'));
    }

    /**
     * Update Product 
     * 
     * @param type $id
     * @param ProductsRequest $request
     * @return type
     */
    public function update($id, ProductsRequest $request)
    {
        $this->product->find($id)->update($request->all());
        $post=$this->product->find($id);
        $post->tags()->sync($this->getTagList($request->tags));

        return redirect()->route('products.index');
    }

    /**
     * Destroy
     * 
     * Remove Product
     * 
     * @param type $id
     * @return type
     */
    public function destroy($id)
    {
        $this->product->find($id)->delete();
        return redirect()->route('products.index');
    }
}