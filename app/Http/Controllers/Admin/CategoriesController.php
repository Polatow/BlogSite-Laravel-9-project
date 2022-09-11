<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Str;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories =Categories::withCount('habarlar')->paginate(5);
        return view('Admin.Categories.list_category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Categories.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        $request->validate([
            'category_name'=>'required| unique:categories',
            'category_status'=>'required',
        ]);

        $category_name = $request->input('category_name');
        $category_slug = Str::slug($category_name, '-');
        $category_status = $request->input('category_status'); 

        Categories::create([
            'category_name'=>$category_name, 
            'category_slug'=>$category_slug,
            'category_status'=>$category_status,
        ]);
        return back()->withSuccess('Kategorýa Döredildi !!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_update = Categories::find($id) ?? abort(403) ;
        return view('Admin.Categories.edit_category', compact('category_update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'category_name'=>'required| unique:categories,category_name,'.$id,
            'category_status'=>'required',
        ]);
        $category_name = $request->input('category_name');
        $category_slug = Str::slug($category_name, '-');
        $category_status = $request->input('category_status'); 

        Categories::whereId($id)->update([
            'category_name'=>$category_name,
            'category_slug'=>$category_slug,
            'category_status'=>$category_status
        ]);

        return redirect()->route('categories.index')->withSuccess('Kategorýa Üýtgedildi !!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categories::find($id)->delete();
         return back()->withSuccess('Kategorýa öçürildi');
    }
}
