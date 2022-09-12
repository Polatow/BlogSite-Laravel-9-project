<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Habarlar;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Str;
class HabarlarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $habarlar = Habarlar::with('categories')->paginate(5);
    //    dd($habarlar);
        return view('Admin.Habarlar.list_habarlar', compact('habarlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Categories::get();
        return view('Admin.Habarlar.create_habar', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // return $request->all();

            $request->validate([
                'habar_title'=>'required | unique:habarlar',
                'habar_status'=>'required',
                'habar_image'=>'required | image |mimes:jpeg,png,jpg',
                'habar_description'=>'required',
                'category_id'=>'required',
            ]);
                $habar_title = $request->input('habar_title');
                $habar_slug = Str::slug($habar_title, '-');
                $habar_status = $request->input('habar_status');
                $habar_description = $request->input('habar_description');
                $category_id = $request->input('category_id');

                if ($image = $request->file('habar_image')) {
                    $Path = 'habar_images/';
                    $habar_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($Path, $habar_image);

                }

            Habarlar::create([
                'habar_title'=>$habar_title,
                'habar_slug'=>$habar_slug,
                'habar_image'=>$habar_image,
                'habar_description'=>$habar_description,
                'habar_status'=>$habar_status,
                'category_id'=>$category_id,
            ]);

            return back()->withSuccess('Habar Döredildi!!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_habar  = Habarlar::findOrFail($id);
        dd($show_habar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $habar_update = Habarlar::whereId($id)->first() ?? abort(403);
            $categories = Categories::get();
        return view('Admin.Habarlar.edit_habar', compact(['habar_update', 'categories']));
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
            'habar_title'=>'required | unique:habarlar,habar_title,'.$id,
            'habar_status'=>'required',
            'habar_image'=>'image |mimes:jpeg,png,jpg',
            'habar_description'=>'required',
            'category_id'=>'required',
        ]);
        // return $request->all();


            $habar_title = $request->input('habar_title');
            $habar_slug = Str::slug($habar_title, '-');
            $habar_status = $request->input('habar_status');
            $habar_description = $request->input('habar_description');
            $category_id = $request->input('category_id');

            if($request->hasfile('habar_image'))
            {
            $old_img=$request->old_habar_image;
            $path='habar_images/'.$old_img;

            unlink($path);

            $img =$request->file('habar_image');
            $name=$img->getClientOriginalName();

            $date=date('YmdHis');
            $habar_image =$date.$name;

            $path='habar_images/';
            $img->move($path , $habar_image);


            Habarlar::whereId($id)->update([
                'habar_title'=>$habar_title,
                'habar_slug'=>$habar_slug,
                'habar_image'=>$habar_image,
                'habar_description'=>$habar_description,
                'habar_status'=>$habar_status,
                'category_id'=>$category_id,
            ]);

        }else{
            Habarlar::whereId($id)->update([
                'habar_title'=>$habar_title,
                'habar_slug'=>$habar_slug,
                'habar_description'=>$habar_description,
                'habar_status'=>$habar_status,
                'category_id'=>$category_id,
            ]);
        }

        return redirect()->route('news.index')->withSuccess('Habar Düzedildi !!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Habar = Habarlar::whereId($id)->first()    ;

        unlink("habar_images/".$Habar->habar_image);

        $Habar->delete();
        // Makalalar::find($id)->delete();
        return back()->withSuccess('Makala Öçürildi!!!');
    }
}
