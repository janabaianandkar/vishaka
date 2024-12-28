<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;
use App\Models\product;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fee=feedback::get();
        return view('feedback_view',compact('fee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function feedback()
    {
        $data=product::get();
        return view('feedback',compact('data'));
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

        $fee=new feedback([
            'name'=>$name,
            'email'=>$eml,
            'mobile'=>$mob,
            'address'=>$addr,
            'description'=>$desc,
        ]);

        $fee->save();

        echo "<script>alert('Feedback success...')
        window.location.href='/feedback1'</script>";
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
        $fee=feedback::find($id);
        $fee->delete();

        return redirect('/feed');
    }
}
