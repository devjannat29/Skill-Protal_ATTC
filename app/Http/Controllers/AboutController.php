<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Faq;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    //About
    public function view_about(){
        $about = About::find(1);
        return view('admin.partials.about.view_about',compact('about'));
    }
    public function saveAbout(Request $request){
        $about = About::where('id','1')->first();
        if($about){
            $about->about_desc =$request->about_desc;

            if($request->hasFile('image')){
                $destination = 'public/upload/about/'.$about->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $takeimage =$request->file('image');

                $imagename = time(). '.'. $takeimage->getClientOriginalExtension();
    
                $request->image->move('public/upload/about/',$imagename);
    
                $about->image= $imagename;
            }
            $about->save();

        return redirect()->back();
        }else{
            $about = new About;
            $about->about_desc =$request->about_desc;

            if($request->hasFile('image')){
                $takeimage =$request->file('image');

                $imagename = time(). '.'. $takeimage->getClientOriginalExtension();
    
                $request->image->move('public/upload/about/',$imagename);
    
                $about->image= $imagename;
            }
            $about->save();

        return redirect()->back()->with('message', 'About Added Successfully');;
        }

        
    }

    //FAQ
    public function view_faq(){
        $faq = Faq::all();
        return view('admin.partials.about.view_faq',compact('faq'));
    }

    public function add_faq(){
        return view('admin.partials.about.add_faq');
    }

    public function upload_faq(Request $request){
        $request->validate([
            'faq' => 'required|string',
            'faqa' => 'nullable|string',
        ]);

        $faqs = new Faq;
        $faqs->faq = $request->faq;
        $faqs->faqa = $request->faqa;

        $faqs->save();

        return redirect()->route('admin.view_faq')->with('success','Faq Added Successfully');
        
    }

    public function delete_faq($id){
        $faq=Faq::findOrFail($id);

        $faq->delete();

        return redirect()-> back()->with('warning','FAQ Delete Successfully');
    }
}
