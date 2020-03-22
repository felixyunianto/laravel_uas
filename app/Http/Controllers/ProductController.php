<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->get();
        return view('pages.product.index', compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('pages.product.create', compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'product_name' => 'required|min:3',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'required|image|mimes:jpg,png,jpeg',
        ]);
        
        $photo = $request->file('photo')->store('photo');
        $code = 1;
        $products = Product::orderBy('code_product','DESC')->first();
        $year = substr(now()->format('Y'),2);
        if($products != null){
            $productYear = substr($products->code_product,3,2);
            if($year > $productYear){
                $code = 1;
            }else{
                $code =substr($products->code_product,5)+1;
            }
        }

        $code_product = str_pad(000+$code,3,0, STR_PAD_LEFT);
        $getCode = "Brg".$year.$code_product;

        $products = Product::create([
            'code_product' => $getCode,
            'product_name' =>$request->product_name,
            'stock' => $request->stock,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'photo' => $photo
        ]);
        
        return redirect()->route('product.index')->with('success','Data has been created!');
    }

    public function destroy($product){
        $products = Product::findOrFail($product);
        $products->delete();

        return redirect()->route('product.index')->with('success','Date has been deleted!');
    }

    public function edit($product){
        $products = Product::findOrFail($product);
        $categories = Category::all();
        return view('pages.product.edit', compact('products', 'categories'));
    }

    public function update(Request $request, $product){
        $products = Product::find($product);
        $this->validate($request,[
            'product_name' => 'required|min:3',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $photo = $products->photo;
        if($request->photo){
            $photo = $request->file('photo')->store('photo');
            $photo_path = $products->photo;
            if(Storage::exists($photo_path)) {
                Storage::delete($photo_path);
            }
        }

        $products->update([
            'product_name' => $request->product_name,
            'stock' => $request->stock,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'photo' => $photo
        ]);

        return redirect()->route('product.index')->with('success','Data has been updated!');
    }
}
