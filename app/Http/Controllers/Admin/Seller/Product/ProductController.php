<?php

namespace App\Http\Controllers\Admin\Seller\Product;

use App\Models\Product;
use App\Models\Category;
use App\Trait\ImageTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::paginate();
        return view('admin.product.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //         // get image
        //         $image = $request->image;
        //         //change current name
        //         $newImageName = rand(0, 100) . time() . rand(0, 100) . '-' . $image->getClientOriginalName();
        //         //move image to folder
        //         $image->storeAs('blogs', $newImageName, 'public');
        //         //save image name to database
        //         $data['image'] = $newImageName;
        // // dd('asdf');
        $products=Product::paginate();
        $product=$request->validated();
        $product['seller_id']=auth()->user()->id;
        $product['image']=$this->storeImage($request,'products');
        // dd($product);
        Product::create($product);
        toastr()->success('created successfully');
        return redirect()->route('product.index')->with(['success'=>'product created successfully','products'=>$products]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
