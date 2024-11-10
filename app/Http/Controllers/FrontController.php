<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\KaryaLiterasi;
use App\Models\Literasi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index (){
        $categories = Category::all();
        $literasis = Literasi::with(['category'])
        ->latest()
        ->take(3)
        ->get();

        $karya_literasis = KaryaLiterasi::with(['category'])
        ->latest()
        ->take(3)
        ->get();
        return view('frontend.home', compact('categories', 'literasis', 'karya_literasis'));
    }

    public function literasi (){
        $literasis = Literasi::latest()
        ->paginate(15);
        return view('frontend.literasi', compact('literasis'));
    }

    public function details_literasi (){


    }

    public function karya (){
        $karya_literasis = KaryaLiterasi::latest()
        ->paginate(15);
        return view('frontend.karya', compact('karya_literasis'));
    }

    public function about (){
        return view('frontend.about');
    }

    public function topik (){
        $categories = Category::all();
        return view('frontend.categories', compact('categories'));
    }

    public function kontak (){
        return view('frontend.kontak');
    }

}