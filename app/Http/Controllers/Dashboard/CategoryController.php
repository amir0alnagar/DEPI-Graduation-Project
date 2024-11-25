<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = category::orderBy('id' , 'desc')->simplePaginate(4);

        return view('dashbaord.pages.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashbaord.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'          => 'required|string|unique:categories,title|min:3|max:255',
            'description'    => 'nullable|string|max:1020',
            'create_user_id' => 'nullable|exists:users,id',
            'update_user_id' => 'nullable|exists:users,id',
        ]);

        $category        = new Category();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->create_user_id = auth()->user()->id;
        $category->update_user_id    = null;
        $category->save();
        return redirect()->route('categories.index')->with('Created_Category_Successfully',"The Category ($category->title) has been Created Successfully");


    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $category = category::find($id);
        if($category == null){
            return view('dashbaord.pages.categories.404.category-404');
        }
        return view('dashbaord.pages.categories.show' , compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
         $category = category::find($id);
        if($category == null){
            return view('dashbaord.pages.categories.404.category-404');
        }
        else{
            if(auth()->user()->user_type  == "admin"){
                return view('dashbaord.pages.categories.edit' , compact('category'))->with('updated_category_successfully',"The Category ($category->title) has been Updated Successfully");
            }
            else{
                return view('dashbaord.pages.categories.404.category-404');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string|max:1020',
                'create_user_id' => 'nullable|exists:users,id',
                'update_user_id' => 'nullable|exists:users,id',
            ]);
            //update Category
            $category_old = category::find($id);
            $category     = category::find($id);
                $category->title = $request->title;
            if($category->title == $request->title){
                $category->title = $category->title;
            }
            else{
                $category->title = $request->title;
            }
            $category->description = $request->description;
            $category->update_user_id = auth()->user()->id;
            $category->save();
            return redirect()->route('categories.index')->with('updated_category_successfully',"The Category ($category->title) has been updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();

        return redirect()->route('categories.index')->with('softDeleted_category_successfully',"The Category ($category->title) has been softDeleted Successfully");
    }
    public function delete(){
        $categories = category::orderBy('id' , 'desc')->onlyTrashed()->simplePaginate(4);
        $categories_count = $categories->count();
        return view('dashbaord.pages.categories.delete' , compact('categories' , 'categories_count'));
    }

    public function restore($id){
        $category = category::withTrashed()->find($id);
        $category->restore();
        $category = category::findOrFail($id);
        $category->update_user_id = auth()->user()->id;
        $category->save();
        return redirect()->route('categories.index')->with('softDeleted_category_successfully',"The Category ($category->title) has been restored Successfully");
}
    public function forceDelete($id){
        $category = category::where('id' , $id);
        $category->forceDelete();
        return redirect()->route('categories.index')->with('forceDeleted_category_successfully',"That Category has been forcedeleted Successfully");
    }
}
