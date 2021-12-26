<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->select('id','name_en','price','status','quantity','created_at')->get();
        return view('products.index',compact('products'));
    }
    public function create()
    {
        $brands = DB::table('brands')->select('id','name_en')->get();
        $subcategories = DB::table('subcategories')->select('id','name_en')->get();
        return view('products.create',compact('brands','subcategories'));
    }
    public function edit($id)
    {
        // get product accroding to product id
        $product = DB::table('products')->where('id',$id)->first(); // collection => array of objects
        // $product = DB::select("SELECT * FROM `products` WHERE `id` = $id");
        $brands = DB::table('brands')->select('id','name_en')->get();
        $subcategories = DB::table('subcategories')->select('id','name_en')->get();
        return view('products.edit',compact('product','brands','subcategories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // dd(public_path('images\products\\'));
        // validation
        $rules = [
            'name_en'=>['required','max:50'],
            'name_ar'=>['required','max:50'],
            'price'=>['required','numeric','max:99999.99','min:1'],
            'quantity'=>['required','integer','max:999','min:1'],
            'status'=>['required','integer','min:0','max:1'],
            'desc_en'=>['required','string'],
            'desc_ar'=>['required','string'],
            'brand_id'=>['nullable','integer','exists:brands,id'],
            'subcategory_id'=>['required','integer','exists:subcategories,id'],
            'image'=>['required','max:1000','mimes:png,jpg,jpeg']
        ];
        $request->validate($rules); // automatic redirection 
        // upload photo
        $photoName = time() . '.' . $request->image->extension(); //23122123.png
        $request->image->move(public_path('images\products\\'),$photoName); //public_path() => public path as absolute path
        // insert product into db
        $data = $request->except('_token','image','page');
        $data['image'] = $photoName;
        // dd($data);
        DB::table('products')->insert($data);
        // success message in specific view according to request
        if($request->page == 'create'){
            return redirect()->back();
        }else{
            return redirect()->route('dashboard.products.index');
        }
    }
}
