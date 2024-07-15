<?php

namespace App\Repository\Admin\Category;

use App\Models\Category;
use App\Interface\Admin\Category\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function index()
    {
        flash()->success('Operation completed successfully.');

        // toastr()->success('asdadsasdasd');
        // toastr()->error('asdadsasdasd');
        $categories = Category::paginate();
        // dd($categories);
        return view('admin.category.index', get_defined_vars());

        //  return redirect()->back()->with(['categories'=>$categories]);
        //  view('admin.category.index',['categories'=>$categories]);
    }
    public function create()
    {
        flash()->success('Operation completed successfully.');

        // flash()->success('Your account has been re-activated.');
        // flash()->success('Your account has been re-activated.');
        // flash()->success('Your account has been re-activated.');
        return view('admin.category.create', get_defined_vars());
    }
    public function show($request){
        return view('admin.category.show',['category'=>$request]);
    }
    public function edit($request){
        return view('admin.category.edit',['category'=>$request]);
    }
    public function store($request)
    {
        flash()->success('Operation completed successfully.');

        Category::create($request->validated());
        $categories = Category::paginate();
        // flash()->success('Your account has been re-activated.');
        // toastr()->success('Your account has been suspended.');
        // toastr()->success('Your account has been suspended.');
        // toastr()->success('Your account has been suspended.');
        // toastr()->success('Your account has been suspended.');
        // toastr()->success('Your account has been suspended.');
        // toastr()->success('Your account has been suspended.');

        // return redirect()->route('category.index')->with(['categories'=>$categories , 'success'=>'category created successfuly']);
        //  return redirect()->back()->with(['error'=>'category created successfuly']);
        flash()->success('Operation completed successfully.');

        return view('admin.category.index', ['categories' => $categories, 'success' => 'category created successfuly']);
    }
    public function destroy($request)
    {
        toastr('Your account has been suspended.');

        $request->delete();
        flash()->success('Operation completed successfully.');

        return redirect()->back()->with(['success' => 'deleted successfuly']);
    }
    public function update($request,$category){
        flash()->success('Operation completed successfully.');

        $category->update($request->validated());
        $categories = Category::paginate();

        return view('admin.category.index', ['categories' => $categories, 'success' => 'category updated successfuly']);

    }
}
