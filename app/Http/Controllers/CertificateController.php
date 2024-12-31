<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificateController extends Controller
{
    //certificate
    public function view_certificate(){
        $data=Certificate::orderBy('id','DESC')->paginate(10);
        // Base URL for the QR code
        $baseUrl = url('/certificate');
        return view('admin.partials.certificate.view_certificate',compact('data','baseUrl'));
    }

    public function add_certificate(){
        return view('admin.partials.certificate.add_certificate');
    }

    public function upload_certificate(Request $request){
        $request->validate([
            'name' => 'required|string',
            'father_name' => 'nullable|string',
            'mother_name' => 'nullable|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'trade_name' => 'required|string',
            'batch_no' => 'required|string',
            'registration_no' => 'required|string',
            'passport_no' => 'nullable|string|max:50',
        ]);

        $certificate = new Certificate;
        $certificate->name = $request->name;
        $certificate->father_name = $request->father_name;
        $certificate->mother_name = $request->mother_name;
        $certificate->phone = $request->phone;
        $certificate->email = $request->email;
        $certificate->trade_name = $request->trade_name;
        $certificate->batch_no = $request->batch_no;
        $certificate->registration_no = $request->registration_no;

        // Generate a unique certificate number
        $certificate->certificate_no = 'ATTC-' . strtoupper(uniqid()) . '-' . date('Y');

        $certificate->passport_no = $request->passport_no;
        $certificate->save();

        return redirect()->route('admin.view_certificate')->with('success','Certificate Added Successfully');
        
    }

    public function certificate($id){
        $data= Certificate::findOrfail($id);
        // Base URL for the QR code
        $baseUrl = url('/certificate');
        return view('admin.partials.certificate.single_certificate',compact('data','baseUrl'));
    }

    public function edit_certificate($id){
        $data= Certificate::findOrfail($id);
        return view('admin.partials.certificate.edit_certificate',compact('data'));
    }

    public function update_certificate(Request $request, $id){
        $request->validate([
            'name' => 'required|string',
            'father_name' => 'nullable|string',
            'mother_name' => 'nullable|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'trade_name' => 'required|string',
            'batch_no' => 'required|string',
            'registration_no' => 'required|string',
            'passport_no' => 'nullable|string|max:50',
        ]);

        $certificate = Certificate::findOrfail($id);
        $certificate->name = $request->name;
        $certificate->father_name = $request->father_name;
        $certificate->mother_name = $request->mother_name;
        $certificate->phone = $request->phone;
        $certificate->email = $request->email;
        $certificate->trade_name = $request->trade_name;
        $certificate->batch_no = $request->batch_no;
        $certificate->registration_no = $request->registration_no;
        $certificate->passport_no = $request->passport_no;
        $certificate->save();

        return redirect()->route('admin.view_certificate')->with('success','Certificate Update Successfully');
        
    }

    public function delete_certificate($id){
        $data=Certificate::findOrFail($id);

        $data->delete();

        return redirect()-> back()->with('warning','Certificate Delete Successfully');
    }

    public function print_certificate($id){
    $data = Certificate::find($id);
    // Base URL for the QR code
    $baseUrl = url('/certificate');

    $cssUrl = url('public/assets/css/pdf.css');
    // Convert images to base64 for better rendering
    $image = [
        'logo1' => 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('upload/asia.png'))),
        'logo2' => 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('upload/govt.png'))),
        'logo3' => 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('upload/NASD.png'))),
    ];

    $pdf = Pdf::loadView('admin.partials.certificate.invoice', compact('data', 'image','baseUrl','cssUrl'))
        ->setPaper([0, 0, 1150, 630], 'portrait') // Landscape mode
        ->setWarnings(false);
        

    return $pdf->stream('certificate.pdf');
    }

}
