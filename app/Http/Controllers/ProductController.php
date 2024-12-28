<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=product::get();
        return view('product_view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_form');
    }


    public function view()
    {
        $data=product::get();
        return view('home',compact('data'));
    }

    public function view1($id)
    {
        $data_code=product::find($id);
        $data=product::get();
        return view('product_details',compact('data_code','data'));
    }

    public function about()
    {
        $data=product::get();
        return view('about',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->get('pname');
        $ti=$request->get('tit');
        $ma=$request->get('mate');
        $qu=$request->get('qual');
        $u=$request->get('us');
        $si=$request->get('siz');
        $g=$request->get('gm');
        $co=$request->get('colr');
        $img=$request->file('img');
        $imgtemp=$img->getClientOriginalName();
        $img->move('admin/img',$imgtemp);

        $product1=new product([
            'name'=>$name,
            'title'=>$ti,
            'mat'=>$ma,
            'qua'=>$qu,
            'use'=>$u,
            'size'=>$si,
            'gms'=>$g,
            'color'=>$co,
            'img'=>$imgtemp,
        ]);

        $product1->save();

        echo "<script>alert('Product added..')
        window.location.href='product'</script>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=product::find($id);
        return view('product_show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=product::find($id);
        return view('product_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name=$request->get('pname');
        $ti=$request->get('tit');
        $ma=$request->get('mate');
        $qu=$request->get('qual');
        $u=$request->get('us');
        $si=$request->get('siz');
        $g=$request->get('gm');
        $co=$request->get('colr');
        $img=$request->file('img');

        if($img!="")
        {
            $imgtemp=$img->getClientOriginalName();
            $img->move('admin/img',$imgtemp);

            $product1=product::find($id);

            $product1->name=$name;
            $product1->title=$ti;
            $product1->mat=$ma;
            $product1->qua=$qu;
            $product1->use=$u;
            $product1->size=$si;
            $product1->gms=$g;
            $product1->color=$co;
            $product1->img=$imgtemp;

            $product1->update();
            return redirect('/product');
        }
        else
        {
            $product1=product::find($id);

            $product1->name=$name;
            $product1->title=$ti;
            $product1->mat=$ma;
            $product1->qua=$qu;
            $product1->use=$u;
            $product1->size=$si;
            $product1->gms=$g;
            $product1->color=$co;

            $product1->update();
            return redirect('/product');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=product::find($id);
        $data->delete();

        return redirect('/product');
    }
}
