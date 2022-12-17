<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProfilePicture;

use App\Models\Category;

class ProductController extends Controller
{


    public function all(){
        $products = Product::all();
        $profile = ProfilePicture::all();
        return view('products/all', compact('products','profile'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $products = Product::with('category')->get();
        $categories = Category::with('product')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $products = Product::orderBy('name', 'asc')->get();
         //$categories = Category::with('product')->get();
         $categories = Category::orderBy('name', 'asc')->get();
         $profile = ProfilePicture::all();
        return view('products.create', compact('categories', 'products', 'categories','profile')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $this->clean_numbers($request->price)*100;
        if ($request->old_price) {
         $product->old_price = $this->clean_numbers($request->old_price)*100;
        }
        $product->url = Str::slug($request->name);
        $product->date = $request->date;
        $product->description = $request->description;
        $product->shipping = $request->shipping;
        $product->feature = $request->feature;
        $product->brand = $request->brand;
        $product->return_policy = $request->return_policy;
        $product->category_id = $request->category;

        if ($request->hasFile('picture')) {
             //get unique name for file
            $picName = 'FSH'.uniqid().time().'.'.$request->picture->getClientOriginalExtension();
             //upload the file
            $request->picture->move(public_path().'/uploads/', $picName);
             //save path and name in database
            $product->picture = 'uploads/'.$picName;
        }
        if ($request->hasFile('picture1')) {
             //get unique name for file
            $picName1 = 'FSH'.uniqid().time().'.'.$request->picture1->getClientOriginalExtension();
             //upload the file
            $request->picture1->move(public_path().'/uploads/', $picName1);
             //save path and name in database
            $product->picture1 = 'uploads/'.$picName1;
        }
        if ($request->hasFile('picture2')) {
             //get unique name for file
            $picName2 = 'FSH'.uniqid().time().'.'.$request->picture2->getClientOriginalExtension();
             //upload the file
            $request->picture2->move(public_path().'/uploads/', $picName2);
             //save path and name in database
            $product->picture2 = 'uploads/'.$picName2;
        }
        if ($request->hasFile('picture3')) {
             //get unique name for file
            $picName3 = 'FSH'.uniqid().time().'.'.$request->picture3->getClientOriginalExtension();
             //upload the file
            $request->picture3->move(public_path().'/uploads/', $picName3);
             //save path and name in database
            $product->picture3 = 'uploads/'.$picName3;
        }
        $product->save();
        return redirect('products/all')->with('message2', 'Product Created Sucessfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $product = Product::where('url',$url)->first();
        if (!$product) {
            abort(404);
        }
        //return view('products.show')->with(['product'=>$product]);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product = Product::findOrFail($id);
       $categories = Category::orderBy('name')->get();
       $profile = ProfilePicture::all();
       return view('products.edit', compact('product', 'categories','profile'));
    }

     public function delete($id)
    {
       $product = Product::findOrFail($id);
       return view('products.delete', compact('product'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $this->clean_numbers($request->price)*100;
        $product->old_price = $this->clean_numbers($request->old_price)*100;
        $product->description = $request->description;
        $product->shipping = $request->shipping;
        $product->feature = $request->feature;
        $product->brand = $request->brand;
        $product->return_policy = $request->return_policy;
        $product->category_id = $request->category;
        if ($request->hasFile('picture')) {
            //get unique name for file
            $picName ='FSH'.uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            //upload the file
            $request->picture->move(public_path().'/uploads/', $picName);
            //save path and save in database
            $product->picture ='uploads/'.$picName;
        }
        if ($request->hasFile('picture1')) {
            //get unique name for file
            $picName1 ='FSH'.uniqid().time().'.'.$request->picture1->getClientOriginalExtension();
            //upload the file
            $request->picture1->move(public_path().'/uploads/', $picName1);
            //save path and save in database
            $product->picture1 ='uploads/'.$picName1;
        }
        if ($request->hasFile('picture2')) {
            //get unique name for file
            $picName2 ='FSH'.uniqid().time().'.'.$request->picture2->getClientOriginalExtension();
            //upload the file
            $request->picture2->move(public_path().'/uploads/', $picName2);
            //save path and save in database
            $product->picture2 ='uploads/'.$picName2;
        }
        if ($request->hasFile('picture3')) {
            //get unique name for file
            $picName3 ='FSH'.uniqid().time().'.'.$request->picture3->getClientOriginalExtension();
            //upload the file
            $request->picture3->move(public_path().'/uploads/', $picName3);
            //save path and save in database
            $product->picture3 ='uploads/'.$picName3;
        }
        $product->save();
        return redirect('products/all')->with('message', 'Product Updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('delete', 'Product deleted');
    }

    public function shop(){
        $products = Product::orderBy('updated_at', 'desc')->paginate(20);
        return view('pages/shop', compact('products'));
    }
}
