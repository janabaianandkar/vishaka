<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;
use App\Models\product;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=gallery::get();
        return view('gallery_view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery_form');
    }


    public function view()
    {
        $data=product::get();
        $data1=gallery::get();
        return view('gallery',compact('data','data1'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img=$request->file('img');
        $imgtemp=$img->getClientOriginalName();
        $img->move('admin/img',$imgtemp);

        $gall=new gallery([
            'img'=>$imgtemp,
        ]);

        $gall->save();

        echo "<script>alert('Image added..')
        window.location.href='gallery'</script>";
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
        $data=gallery::find($id);
        return view('gallery_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $img=$request->file('img');

        if($img!="")
        {
            $imgtemp=$img->getClientOriginalName();
            $img->move("admin/img",$imgtemp);

            $data=gallery::find($id);

            $data->img=$img;

            $data->update();
            return redirect("/gallery");
        }
        else
        {
            $data=gallery::find($id);

            $data->update();
            return redirect("/gallery");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=gallery::find($id);
        $data->delete();

        return redirect('/gallery');
    }
}
