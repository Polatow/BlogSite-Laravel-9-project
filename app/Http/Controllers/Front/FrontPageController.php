<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Habarlar;
use App\Models\Makalalar;
use App\Models\Categories;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function front_index()
    {
        $makalalar = Makalalar::whereMakala_status('active')->take(4)->latest()->get();
         $habarlar = Habarlar::whereHabar_status('active')->with('categories')->take(4)->latest()->get();
        return view('Front.front_index', compact(['makalalar', 'habarlar']));
    }
 
    public function news( Request $request)
    {
       $habarlar = Habarlar::whereHabar_status('active')->with('categories')->latest()->paginate(6);
       $categories = Categories::whereCategory_status('active')->get();
    $category_name = $request->get('category');
        if($category_name)
        {   
             $category_id = Categories::whereCategory_name($category_name)->first();
           $habarlar = Habarlar::whereCategory_id($category_id->id)->paginate(6); 
        }
       return view('Front.news', compact('habarlar','categories'));
    }

    public function single_news($slug)
    {
        $single_new = Habarlar::whereHabar_slug($slug)->first();
        $categories = Categories::whereCategory_status('active')->get();
        $beylekiler = Habarlar::where('id' ,'!=', $single_new->id)->take(4)->get();
        return view('Front.single_new', compact('single_new', 'beylekiler', 'categories'));
    }

    public function makalalar()
    {
        $makalalar = Makalalar::whereMakala_status('active')->latest()->paginate(8);
        return view('Front.makalalar', compact('makalalar'));
    }

    public function single_makalalar($slug)
    {

          $single_makala = Makalalar::whereMakala_slug($slug)->first();
            // dd($single_makala);
          $beylekiler = Makalalar::where('id' ,'!=', $single_makala->id)->take(4)->get();
        return view('Front.single_makala', compact('single_makala', 'beylekiler'));
    }

    public function about()
    {
         $about_data = About::find(1);
        return view('Front.about',  compact('about_data') );
    }

    public function contact()
    {
        return view('Front.contact');
    }

    public function search(Request $request)
    {
        $gozleg= $request->input('gozleg');
        
        if($gozleg)
        {
            
            $result_habarlar  = Habarlar::where('habar_title', 'LIKE', '%'. $gozleg .'%')->get()  ?? abort(403);
            $result_makalalar = Makalalar::where('makala_title', 'LIKE', '%'. $gozleg .'%')->get()  ?? abort(403);
                // dd($result_makalalar);
        }

        return view('front.search_results', compact('result_habarlar', 'result_makalalar'));

    } 
}
