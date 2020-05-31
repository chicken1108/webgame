<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\BackController;

class CategoryController extends BackController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $c = Category::paginate(5);

        return view('category.index',[
                'cats' => $c
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

       if (Category::create([
            'name' => $request->name,
            'parent' => $request->parent,
            'status' => $request->status
       ])) {
           
       return redirect()->route('backend.category')->with('Success','Them moi thanh cong');
            }else {
                 return redirect()->back()->with('Success','Co loi, xin vui long thu lai');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Category::find($id);

        return view('category.edit',[
                'model' => $model
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Category $category)
    {
         $model = Category::find($id);
        $this->validate($request,[
            'name' => 'required',
            'parent' => 'required',
            'status' => 'required',
        ],[]);

        $model->update([
            'name' => $request->name,
            'parent' => $request->parent,
            'status' => $request->status
        ]);
        return redirect()->route('backend.category')->with('success','Update '.$model->name.' thành công');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       Category::destroy($id);
    return redirect()->route('backend.category')->with('success','Xoa thành công');
    }
}
