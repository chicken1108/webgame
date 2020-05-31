<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\BackController;


class ProductController extends BackController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $p = Product::orderBy('created_at','DESC')->paginate(10);
        return view('product.index',[
                'pro' => $p
        ]);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('product.add',[
            'cats' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'cat_id' => 'required',
            'price' => 'required',
        ],[]);

        
        $image = '';
        if ($request->has('file')) {
        $file = $request->file;
        $file->move(base_path('/uploads'),$file->getClientOriginalName());
        $image = $file->getClientOriginalName();
        }
        Product::create([

            'name'  => $request->name,
            'cat_id' => $request->cat_id,
            'slug' => $request->slug,
            'image' =>$image,
            'price' => $request->price,
            'price_sale' => $request->price_sale,
            'status' => $request->status,
            'content' => $request->content
        ]);
         return redirect()->route('backend.product')->with('Success','Them moi thanh cong');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Product::find($id);

        return view('product.edit',[
            'model' => $model,
            'cats' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        // echo $id;die;
        // Select * From product where id = $id limit 1
        // ham find(id) chi chay tren khoa chinh
        $model = Product::find($id);
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'cat_id' => 'required',
            'price' => 'required',
        ],[]);
        // echo $id;die;
        // echo base_path('/uploads/');die;
        // echo $request->slug;die;
        $image = $model->image;
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }

        $model->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $image,
            'cat_id' => $request->cat_id,
            'content' => $request->content,
            'price' => $request->price,
            'price_sale' => $request->price_sale,
            'status' => $request->status,
        ]);
         return redirect()->route('backend.product')->with('success','Update '.$model->name.' thành công');  
    }
    public function destroy($id)
    {
        Product::destroy($id);
    return redirect()->route('backend.product')->with('success','Xoa thành công');
    }

    
}
