<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\SubCategory ;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $subcategories = SubCategory::all();

        return view('dashbaord.pages.subcategory.index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('dashbaord.pages.subcategory.create',compact('categories'));
        return view('dashbaord.pages.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'          => 'required|string|unique:categories,title|max:255',
            'description'    => 'nullable|string|max:1020',
            'Category'    => 'nullable|string|exists:categories,name',
            'create_user_id' => 'nullable|exists:users,id',
            'update_user_id' => 'nullable|exists:users,id',

        ]);
        $subcategory        = new SubCategory();
        $subcategory->title = $request->title;
        $subcategory->description = $request->description;
        $subcategory->catagory = $request->Category;
        $subcategory->create_user_id = auth()->user()->id;
        $subcategory->update_user_id    = null;
        $subcategory->save();
        return redirect()->route('subcategories.index')->with('Created_SubCategory_Successfully',"The SbCategory ($subcategory->title) has been Created Successfully");

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $subcategory = SubCategory::find($id);
        if($subcategory == null){
            return view('dashbaord.pages.subcategory.404.subcategory-404');
        }
        return view('dashbaord.pages.subcategory.show' , compact('subcategory'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $subcategory = SubCategory::find($id);
        if($subcategory == null){
            return view('dashbaord.pages.subcategory.404.subcategory-404');
            }
            else{
                if(auth()->user()->user_type  == "admin"){
                    return view('dashbaord.pages.subcategory.edit' , compact('subcategory'))->with('subcategory',"The subcategory ($subcategory->title) has been Updated Successfully");
                }
                else{
            return view('dashbaord.pages.subcategory.edit' , compact('subcategory'));
                }
            }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            //
$request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string|max:1020',
                'create_user_id' => 'nullable|exists:users,id',
                'update_user_id' => 'nullable|exists:users,id',
            ]);
            //update subcategory
            $subcategory_old = SubCategory::find($id);
            $subcategory     = SubCategory::find($id);
                $subcategory->title = $request->title;
            if($subcategory->title == $request->title){
                $subcategory->title = $subcategory->title;
            }
            else{
                $subcategory->title = $request->title;
            }
            $subcategory->description = $request->description;
            $subcategory->update_user_id = auth()->user()->id;
            $subcategory->save();
            return redirect()->route('subcategories.index')->with('updated_subcategory_successfully',"The subcategory ($subcategory->title) has been updated Successfully");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $subcategory = SubCategory::find($id);
        $subcategory->delete();

        return redirect()->route('categories.index')->with('softDeleted_subcategory_successfully',"The subcategory ($subcategory->title) has been softDeleted Successfully");

    }
    public function delete(){
        $categories = SubCategory::orderBy('id' , 'desc')->onlyTrashed()->simplePaginate(4);
        $categories_count = $categories->count();
        return view('dashbaord.pages.subcategory.delete' , compact('subcategories' , 'subcategories_count'));
    }
    public function restore(string $id){
        $subcategory = SubCategory::onlyTrashed()->find($id);
        $subcategory->restore();
        $subcategory = SubCategory::findOrFail($id);
        $subcategory->update_user_id = auth()->user()->id;
        $subcategory->save();
        return redirect()->route('subcategories.index')->with('restored_subcategory_successfully',"The
        subcategory ($subcategory->title) has been restored Successfully");
        }

        public function forceDelete($id){
            $subcategory = SubCategory::where('id' , $id);
            $subcategory->forceDelete();
            return redirect()->route('subcategories.index')->with('forceDeleted_subcategory_successfully',"That subcategory has been forcedeleted Successfully");
        }






}
