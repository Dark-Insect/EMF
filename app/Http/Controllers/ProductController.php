<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate(5);

        return view('products.index')->with('products', $product);
        
    }

    /**
     * Show the fname for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        if($request->hasFile('product_img')){
            //Get file name
            $fileNameWithExt = $request->file('product_img')->getClientOriginalName();
            //File name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('product_img')->getClientOriginalExtension();

            $fileNameToStore = $filename. '_' .time(). '.' .$extension;

            $path = $request->file('product_img')->storeAs('public/products', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'product.png';
        }



        $products = new Product;
        $products->firstname = $request->firstname;
        $products-> middlename = $request->middlename;
        $products->lastname = $request->lastname;
        $products->birthdate= $request->birthdate;
        $products->street = $request->street;
        $products->barangay = $request->barangay;
        $products->town = $request->town;
        $products->fname = $request->fname;
        $products->mname = $request->mname;

        
        $products ->save();
        return redirect('/products')->with('success', 'Registration Successful');
        return redirect()->back()->with('error', 'Registration Failed!');
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
     * Show the fname for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $id)
    {
        $products = Product::find($id);
        Storage::delete('public/products/'.$products->product_img );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {

        if($request->hasFile('product_img')){
            //Get file name
            $fileNameWithExt = $request->file('product_img')->getClientOriginalName();
            //File name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('product_img')->getClientOriginalExtension();

            $fileNameToStore = $filename. '_' .time(). '.' .$extension;

            $path = $request->file('product_img')->storeAs('public/products', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'product.png';
        }



        $data = $request->input();
        $products = Product::find($id);
        $products->firstname = $data['firstname'];
        $products->middlename = $data['middlename'];
        $products->lastname =$data['lastname'];
        $products->birthdate =$data['birthdate'];
        $products->street =$data['street'];
        $products->barangay = $data['barangay'];
        $products->town = $data['town'];
        $products->fname = $data['fname'];
        $products->mname = $data['mname'];
        $products->product_img = $fileNameToStore;

        $products ->save();
        return redirect()->back()->with('success', ' Updated Successfully');
        return redirect()->back()->with('error', ' Registration Failed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->product_img != 'product.png'){
            Storage::delete('public/products/'.$product->product_img );
        }
        $product->delete();
        return redirect()->back()->with('success', ' Successfully Deleted');

    }
}
