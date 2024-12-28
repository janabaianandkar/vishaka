<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\product;
use App\Models\enquiry;
use App\Models\feedback;
use App\Models\gallery;
use App\Models\multipleimage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cont=contact::get();
        return view('contact_view',compact('cont'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function dashboard()
    {
        $productcount=product::count();
        $gallerycount=gallery::count();
        $contactcount=contact::count();
        $feedbackcount=feedback::count();
        $enquirycount=enquiry::count();
        $multipleimagecount=multipleimage::count();
        return view('index',compact('productcount','gallerycount','contactcount','feedbackcount','enquirycount','multipleimagecount'));
    }

    public function contact()
    {
       $data=product::get();
       return view('contact',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->get('name');
        $eml=$request->get('eml');
        $sub=$request->get('sub');
        $mob=$request->get('mob');
        $msg=$request->get('msg');

        $cont=new contact([
            'name'=>$name,
            'email'=>$eml,
            'subject'=>$sub,
            'mobile'=>$mob,
            'message'=>$msg,
        ]);

        $cont->save();
        echo "<script>alert('Contact Success...')
        window.location.href='contactus'</script>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cont=contact::find($id);
        $cont->delete();

        return redirect('/contact1');
    }
}
