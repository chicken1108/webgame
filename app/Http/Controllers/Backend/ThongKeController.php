<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductSold;
use App\Models\Transaction;

class ThongKeController extends Controller
{
    public function transactionHistory()
    {
    	$data['transactions'] = Transaction::orderby('created_at', 'DESC')->paginate(10);
    	return view('thongke.transaction_history', $data);
    }

    public function productSold()
    {
    	$data['products_sold'] = ProductSold::orderby('created_at', 'DESC')->paginate(10);
    	return view('thongke.product_sold', $data);
    }
}
