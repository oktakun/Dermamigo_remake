<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function __construct()
  {
      $this->middleware('admin');
      
      // Midtrans::$serverKey = 'SB-Mid-server-mFrBqa6Bvr-WR0N8NCVqBCAw';
      //   //set is production to true for production mode
      // Midtrans::$isProduction = false;
  }

  public function product()
  {
  	return view('admin.product.index');
  }

  public function add()
  {
    return view('admin.product.add');
  }
  
}
