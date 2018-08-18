<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use Image;
use Storage;
use Purifier;
use Ramsey\Uuid\Uuid;

class CategoryController extends Controller
{
    public function __construct()
    {
    	$this->middleware('admin');
      
      // Midtrans::$serverKey = 'SB-Mid-server-mFrBqa6Bvr-WR0N8NCVqBCAw';
      //   //set is production to true for production mode
      // Midtrans::$isProduction = false;
    }

    public function category()
    {
    	return view('admin.category.index');
    }
}
