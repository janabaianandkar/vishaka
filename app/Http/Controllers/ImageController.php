<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\multipleimage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=multipleimage::all();
        // $imgnames = json_decode($data->img, true);
        return view('multipleimg_view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('multipleimg_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img *'=> 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $imgnames = [];

            foreach($request->file('img')  as $key=>$value)
            {
                $imgname = time().'_'.$key.'.'.$value->getClientOriginalExtension();
                $value->move(public_path('admin/img'),$imgname);

                $imgnames[]=$imgname;
            }   

            $data=new multipleimage([
                'img'=>json_encode($imgnames),
            ]);

            $data->save();
            echo "<script>alert('Image upload success...')
            window.location.href='/upload'</script>";
            //return redirect()->back()->withSuccess('You have successfully upload image.')->with('img',$imgnames);
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
        $data=multipleimage::find($id);
        $imgnames=json_decode($data->img,true);

        return view('multipleimg_edit',compact('data','imgnames'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'img.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]); 
    
        $data = MultipleImage::find($id);
        $imgnames = [];

        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $file) {
                $imgname = time() . '_' . $file->getClientOriginalName(); 
                $file->move(public_path('admin/img'), $imgname); 
                $imgnames[]= $imgname; 
            }
        }
    
        
        $data->img = json_encode($imgnames);
        $data->update();

        echo "<script>alert('Image update success..')
        window.location.href='/upload'</script>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=multipleimage::find($id);
        $data->delete();

        return redirect('/upload');
    }
}
