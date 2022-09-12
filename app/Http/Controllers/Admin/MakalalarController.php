<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Makalalar;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class MakalalarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makalalar = Makalalar::paginate(5);
        return view('Admin.Makalalar.list_makala', compact('makalalar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Makalalar.create_makala');

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
            'makala_title'=>'required | unique:makalalar',
            'makala_status'=>'required',
            'makala_image'=>'required | image |mimes:jpeg,png,jpg',
            'makala_description'=>'required',
        ]);
            $makala_title = $request->input('makala_title');
            $makala_slug = Str::slug($makala_title, '-');
            $makala_status = $request->input('makala_status');
            $makala_description = $request->input('makala_description');

            if ($image = $request->file('makala_image')) {
                $Path = 'makala_images/';
                $makala_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($Path, $makala_image);

            }

        Makalalar::create([
            'makala_title'=>$makala_title,
            'makala_slug'=>$makala_slug,
            'makala_image'=>$makala_image,
            'makala_description'=>$makala_description,
            'makala_status'=>$makala_status,
        ]);

        return back()->withSuccess('Makala Döredildi!!!');
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
        $makala_update = Makalalar::find($id)  ?? abort(403);
        return view('Admin.Makalalar.edit_makala', compact('makala_update'));
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

        // return $request->all();
        $request->validate([
            'makala_title'=>'required |unique:makalalar,makala_title,'.$id,
            'makala_status'=>'required',
            'makala_image'=>'image |mimes:jpeg,png,jpg',
            'makala_description'=>'required',
        ]);


            $makala_title = $request->input('makala_title');
            $makala_slug = Str::slug($makala_title, '-');
            $makala_status = $request->input('makala_status');
            $makala_description = $request->input('makala_description');

            if($request->hasfile('makala_image'))
            {
            $old_img=$request->old_makala_image;
            $path='makala_images/'.$old_img;

            unlink($path);

            $img =$request->file('makala_image');
            $name=$img->getClientOriginalName();

            $date=date('YmdHis');
            $makala_image =$date.$name;

            $path='makala_images/';
            $img->move($path , $makala_image);


        Makalalar::whereId($id)->update([
            'makala_title'=>$makala_title,
            'makala_slug'=>$makala_slug,
            'makala_image'=>$makala_image,
            'makala_description'=>$makala_description,
            'makala_status'=>$makala_status,
        ]);

         }
         else{
            Makalalar::whereId($id)->update([
                'makala_title'=>$makala_title,
                'makala_slug'=>$makala_slug,
                'makala_description'=>$makala_description,
                'makala_status'=>$makala_status,
            ]);
         }

         return redirect()->route('makalalar.index')->withSuccess('Makala  düzedildi!!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makala = Makalalar::findOrFail($id);

        unlink("makala_images/".$makala->makala_image);

        $makala->delete();
        // Makalalar::find($id)->delete();
        return back()->withSuccess('Makala Öçürildi!!!');
    }
}
