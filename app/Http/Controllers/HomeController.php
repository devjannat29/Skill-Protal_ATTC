<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use App\Models\Faq;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index method
    public function Index(){
        $about = About::find(1);
        $faq = Faq::all();
        return view('frontend.pages.index',compact('about','faq'));
    }

    // certificate method
    public function certificate(Request $request){
        $data=Certificate::orderBy('id','DESC')->paginate(10);
        $search = $request->input('search');
        $data = Certificate::where('registration_no', 'like', "%$search%")
        ->orWhere('phone', 'like', "%$search%")
        ->orWhere('email', 'like', "%$search%")
        ->get();

        return view('frontend.pages.certificate',compact('data'));
    }

}
