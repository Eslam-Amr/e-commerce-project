<?php

namespace App\Repository\Admin\Product;

use App\Models\Product;
use App\Models\Category;
use App\Trait\ImageTrait;
use App\Interface\Admin\Product\ProductRepositoryInterface;
// use App\Interface\Product\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(auth("admin")->user());
        if (auth('admin')->check()) {
            $products = Product::where('hide',0)->where('admin-acceptance',1)->where('status','accepted')->paginate();
        }
        // Check if the user is authenticated as seller
        else if (auth('seller')->check()) {
            $products = Product::where('hide',0)->where('admin-acceptance',1)->where('status','accepted')->where('seller_id', auth('seller')->user()->id)->paginate();
        }
        return view('admin.product.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',get_defined_vars());
// return response()->json();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request)
    {

        $products=Product::paginate();
        $product=$request->validated();
        $product['seller_id']=auth()->user()->id;
        $product['image']=$this->storeImage($request,'products');
        Product::create($product);
        toastr()->success('created successfully');
        return redirect()->route('admin.product.index')->with(['success'=>'product created successfully','products'=>$products]);
    }

    /**
     * Display the specified resource.
     */
    public function show($product)
    {
        return view('admin.product.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product)
    {
        $categories = Category::all();
        return view('admin.product.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, $product)
    {
        $updatedProduct=$request->validated();
        $updatedProduct['image']=$this->updateImage($request,$product,'products');
        $product->update($updatedProduct);
        $products=Product::paginate();

        return redirect()->route('product.index')->with(['success'=>'updated successfully','products'=>$products]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        $this->destroyImage('products',$product);
        $product->delete();
        $products=Product::paginate();
        return redirect()->route('product.index')->with(['success'=>'deleted successfully','products'=>$products]);
    }
}
