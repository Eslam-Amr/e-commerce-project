<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Interface\Admin\Category\CategoryRepositoryInterface;
// use App\Interface\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories=Category::paginate();
        // dd($categories);
        // toastr()->success('sdafffffffff');
        // $categories = Category::paginate();
        $categories = $this->categoryRepository->getCategorypaginate();
        return view('admin.category.index', get_defined_vars());

        // return $this->categoryRepository->index();
        // $categories=Category::paginate();
        // return view('admin.category.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // toastr()->success('sdafffffffff');
       // return $this->categoryRepository->create();
       return view('admin.category.create', get_defined_vars());

       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // Category::create($request->validated());
        // $categories = Category::paginate();
        // Category::create($request->validated());\
        $this->categoryRepository->createCategory($request);
        $categories = $this->categoryRepository->getCategorypaginate();
        return view('admin.category.index', ['categories' => $categories, 'success' => 'category created successfuly']);

        // toastr()->success('sdafffffffff');
        // return $this->categoryRepository->store($request);
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // return $this->categoryRepository->show($category);
        return view('admin.category.show',['category'=>$category]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // return $this->categoryRepository->edit($category);
        return view('admin.category.edit',['category'=>$category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // $category->update($request->validated());
        $this->categoryRepository->updateCategory($request, $category);
        // $categories = Category::paginate();
        $categories = $this->categoryRepository->getCategorypaginate();

        // toastr()->success('category updated successfully.');
        // return view('admin.category.index', ['categories' => $categories, 'success' => 'category updated successfuly']);
        return redirect()->route('admin.category.index')->with(['categories' => $categories, 'success' => 'category updated successfuly']);

        // return $this->categoryRepository->update($request,$category);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // dd("asf");
        // dd($category);
        // return $this->categoryRepository->destroy($category);
         $this->categoryRepository->destroyCategory($category);
        return redirect()->back()->with(['success' => 'deleted successfuly']);
    }
}
