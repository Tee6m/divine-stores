<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\ProfilePicture;


class CategoryController extends Controller
{
    
    public function all(){
        $category_count= Category::all()->count();
        $categories = Category::all();
        $profile = ProfilePicture::all();
        return view('categories/all', compact('categories','category_count','profile'));
    }
    //category create
    public  function create(){
        if(auth()->user()->admin){
	    $categories = Category::all(); 
        $user =auth()->user();
        $profile = ProfilePicture::all();
        return view('categories/create', compact('categories','profile'));
        }else{
            return redirect()->route('home') ;
        }
    }

    // category store
    public function store(request $request) {
        $category = new Category();
        $category->name = $request->name;
        $category->url = Str::slug($request->name);

        if($request->hasFile('picture')){

            //get unique name for picture
            $picName = 'FSH'.uniqid().time().'.'.$request->picture->getClientOriginalExtension();

            // upload the pictuure
            $request->picture->move(public_path().'/uploads/',$picName);

            //save path and name in the database. also, create a folder the public folder as uploads.
            $category->picture = 'uploads/'.$picName;
        }
        $category->save();
        return redirect('categories/all')->with('message', 'Category Created Succesfully');
    }

    //category show
    public function show($url) {
        $category = Category::where('url', $url)->first();
        if (! $category) {
            abort(404);
        }

         if(auth()->user()->admin){
	
         $user =auth()->user();
        return view('categories.show', compact('category'));
        }else{
            return redirect()->route('home') ;
        }
        
    }

    //category delete
    public function delete($id){
        $category = Category::findorFail($id);
        return view('categories/delete', compact('category'));
    }

    public function edit($id){
        $category = Category::where('id', $id)->first();
        $profile = ProfilePicture::all();
        return view('categories/edit', compact('category','profile'));
    }

    //category update
    public function update(Request $request, $id){
        $category = Category::findorFail($id);
        $category->name = $request->name;

        if ($request->hasFile('picture')) {
            $picName = 'FSH'.uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads', $picName);
            $category->picture = 'uploads/'.$picName;
        }

        $category->save();
        return redirect('categories/all')->with('message3', 'Category Updated');
    }

    // category destroy
    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('message2', 'Category Deleted Succesfully') ;
    }
}
