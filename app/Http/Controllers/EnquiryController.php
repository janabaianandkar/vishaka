<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enquiry;
use App\Models\product;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enq=enquiry::get();
        return view('enquiry_view',compact('enq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function enquiry()
    {
        $data=product::get();
        return view('enquiry',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->get('name');
        $eml=$request->get('eml');
        $mob=$request->get('mob');
        $addr=$request->get('addr');
        $desc=$request->get('desc');

        $enq=new enquiry([
            'name'=>$name,
            'email'=>$eml,
            'mobile'=>$mob,
            'address'=>$addr,
            'description'=>$desc,
        ]);

        $enq->save();

        echo "<script>alert('Enquiry success...')
        window.location.href='/enquiry1'</script>";
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
        $enq=enquiry::find($id);
        $enq->delete();

        return redirect('/enqu');
    }
}
