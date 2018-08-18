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

  public function inputproduct(Request $request)
  {
    
    $this->validate($request, array(

          'name' => 'required',
          'slug' => 'unique:products,slug',
          'SKU' => 'required',
          'description' => 'required',
          'add_info' => 'required',
          'price' => 'required',
          'sale' => 'required',
          'tax_status' => 'required',
          'tax' => 'required',
          'stock' => 'required',
          'featured' => 'required',
          'status' => 'required'


        ));

    $product = new Product;

$product->id            = strtoupper(Uuid::uuid4($request->id));
$product->name          = $request->name;
$product->slug          = str_slug($request->name, "-");
$product->SKU           = $request->SKU;
$product->description   = Purifier::clean($request->description);
$product->add_info      = $request->add_info;
$product->price         = $request->price;
$product->sale          = $request->sale;
$product->tax_status    = $request->tax_status;
$product->tax           = $request->tax;
$product->stock         = $request->stock;
$product->featured      = $request->featured;
$product->status        = $request->status;

if ($request->hasFile('featured_image')) 
{
  $image_url = $request->file('featured_image');
  $filename = time() . '.' . $image_url->getClientOriginalExtension();
  $location = public_path('public/images/' . $filename);
  Image::make($image_url)->resize(800, 400)->save($location);

  $product->image_url = $filename;
}

// $filename = time() . '.' . $data['profile_img']->extension();
//     $path = $data['profile_img']->storeAs('uploads/profile_images', $filename);

//     // This would ideally be in a job, triggered by the user created event
//     Image::make($path)->resize(100,100)->save($path);

//     return [
//         // all your other fields...
//         'profile_img' => $path
//     ];

$product->save();

return redirect()->route('product.index');


  }
  
}
