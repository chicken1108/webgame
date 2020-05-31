<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\BackController;

class BannerController extends BackController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('banner.index',[
            'banners' => Banner::paginate(10) 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->offsetUnset('_token','file');

        // Upload file
        $image = '';
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads/banner/'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }
        // Theem key image vao mang
        $request->merge(['image'=>$image]);
        // dd($request->all());

        Banner::create($request->all());

        return redirect()->route('backend.banner')->with('success','Tạo mới banner thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Banner::find($id);

        return view('banner.edit',[
                'model' => $model
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Banner $banner)
    {
       $model = Banner::find($id);
        $this->validate($request,[
            'name' => 'required',
            'status' => 'required',
            'link' => 'required',
        ],[]);
        // echo $id;die;
        // echo base_path('/uploads/');die;
        // echo $request->slug;die;
        $image = $model->image;
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads/banner/'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }

        $model->update([
            'name' => $request->name,
            'link' => $request->link,
            'content' => $request->content,
            'ordering' => $request->ordering,
            'status' => $request->status,
            'image' => $image,
        ]);
         return redirect()->route('backend.banner')->with('success','Update '.$model->name.' thành công');  
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // Banner::find($id)->delete();
        // Banner::destroy([1,2,3,4,5,6]);
        Banner::destroy($id);
        return redirect()->route('backend.banner')->with('success','Delete thành công');
    }
}
