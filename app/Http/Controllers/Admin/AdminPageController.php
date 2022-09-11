<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Habarlar;
use App\Models\Makalalar;

class AdminPageController extends Controller
{
    public function admin_index()
    {
          $category_count= Categories::count();
          $habar_count = Habarlar::count();
          $makala_count = Makalalar::count();

        return view('Admin.admin_index', compact('category_count', 'habar_count', 'makala_count'));
    }
}
