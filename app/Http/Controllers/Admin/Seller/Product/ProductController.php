<?php

namespace App\Http\Controllers\Admin\Seller\Product;

use App\Models\Product;
use App\Models\Category;
use App\Trait\ImageTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Interface\Admin\Product\ProductRepositoryInterface;

// use App\Interface\Product\ProductRepositoryInterface;

class ProductController extends Controller
{
    use ImageTrait;
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->productRepository->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->productRepository->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        return $this->productRepository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $this->productRepository->show($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return $this->productRepository->edit($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        return $this->productRepository->update($request, $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        return $this->productRepository->destroy($product);
    }
}










//   /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $products=Product::paginate();
//         return view('admin.product.index',get_defined_vars());
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         $categories = Category::all();
//         return view('admin.product.create',get_defined_vars());

//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(StoreProductRequest $request)
//     {
//         //         // get image
//         //         $image = $request->image;
//         //         //change current name
//         //         $newImageName = rand(0, 100) . time() . rand(0, 100) . '-' . $image->getClientOriginalName();
//         //         //move image to folder
//         //         $image->storeAs('blogs', $newImageName, 'public');
//         //         //save image name to database
//         //         $data['image'] = $newImageName;
//         // // dd('asdf');
//         $products=Product::paginate();
//         $product=$request->validated();
//         $product['seller_id']=auth()->user()->id;
//         $product['image']=$this->storeImage($request,'products');
//         // dd($product);
//         Product::create($product);
//         toastr()->success('created successfully');
//         return redirect()->route('product.index')->with(['success'=>'product created successfully','products'=>$products]);
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Product $product)
//     {
//         return view('admin.product.show',get_defined_vars());
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Product $product)
//     {
//         $categories = Category::all();

//         // dd($product);
//         return view('admin.product.edit',get_defined_vars());
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(UpdateProductRequest $request, Product $product)
//     {
//         $updatedProduct=$request->validated();
//         $updatedProduct['image']=$this->updateImage($request,$product,'products');
//         $product->update($updatedProduct);
//         $products=Product::paginate();

//         return redirect()->route('product.index')->with(['success'=>'updated successfully','products'=>$products]);
//         // dd($request->all(),$product,$updatedProduct);
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Product $product)
//     {
//         $this->destroyImage('products',$product);
//         $product->delete();
//         $products=Product::paginate();

//         return redirect()->route('product.index')->with(['success'=>'deleted successfully','products'=>$products]);
//     }
