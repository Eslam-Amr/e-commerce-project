<?php

namespace App\Repository\Category;

use App\Models\Category;
use App\Interface\Category\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function index()
    {
        // toastr()->success('asdadsasdasd');
        // toastr()->error('asdadsasdasd');
        $categories=Category::paginate();
        // dd($categories);
        return view('admin.category.index',get_defined_vars());

        //  return redirect()->back()->with(['categories'=>$categories]);
        //  view('admin.category.index',['categories'=>$categories]);
        }
        public function create()
        {
            // flash()->success('Your account has been re-activated.');
            // flash()->success('Your account has been re-activated.');
            // flash()->success('Your account has been re-activated.');
            return view('admin.category.create',get_defined_vars());

    }
        public function store($request)
        {
Category::create($request->validated());
$categories=Category::paginate();
// flash()->success('Your account has been re-activated.');
// toastr()->success('Your account has been suspended.');
// toastr()->success('Your account has been suspended.');
// toastr()->success('Your account has been suspended.');
// toastr()->success('Your account has been suspended.');
// toastr()->success('Your account has been suspended.');
// toastr()->success('Your account has been suspended.');

// return redirect()->route('category.index')->with(['categories'=>$categories , 'success'=>'category created successfuly']);
        //  return redirect()->back()->with(['error'=>'category created successfuly']);

            return view('admin.category.index',['categories'=>$categories ,'success'=>'category created successfuly']);
    }
}
