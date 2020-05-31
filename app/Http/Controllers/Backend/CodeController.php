<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\Product;
use App\Models\Category;
use Excel;
use DB;


class CodeController extends Controller
{
    public function index()
    {
    	$data['list_code'] = Code::orderby('created_at', 'DESC')->paginate(10);
    	return view('macode.index', $data);
    }

    public function add()
    {
    	$data['products'] = Product::all();
    	return view('macode.add', $data);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'file'  => 'required|mimes:xls,xlsx'
    	]);
    	$path = $request->file('file')->getRealPath();
    	$data = Excel::load($path)->get();
    	if($data->count() > 0)
    	{
    		foreach($data->toArray() as $key => $value)
    		{
    			foreach($value as $row)
    			{
    				$code =  new Code;
    				$code->product_id = $request->product_id;
    				$code->code = $row;
    				$code->save();
    			}
    		}
    	}
    	return back()->with('success', 'Thêm mã code thành công!');
    }

    public function edit($id)
    {
    	$data['products'] = Product::all();
    	$data['editcode'] = Code::find($id);
    	return view('macode.edit', $data);
    }

    public function update(Request $request, $id)
    {
    	$code = Code::find($id);
    	$code->product_id = $request->product_id;
    	$code->code = $request->code;
    	$code->save();
    	return redirect()->route('backend.code')->with('success', 'Sửa mã code thành công!');
    }

    public function destroy($id)
    {
    	Code::destroy($id);
    	return redirect()->route('backend.code')->with('success', 'Xoá mã code thành công!');
    }

}
