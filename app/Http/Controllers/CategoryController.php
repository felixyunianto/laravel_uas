<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Alert;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('pages.category.index', compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'category_name' => 'required|min:3'
        ]);

        $categories = Category::create([
            'category_name' => $request->category_name
        ]);
        return redirect()->route('category.index')->with('success', 'Data has been created!');
    }

    public function destroy($category){
        $categories = Category::findOrFail($category);

        $categories->delete();
        return redirect()->route('category.index')->with('success', 'Data has been deleted!');
    }

    public function edit($category){
        $categories = Category::find($category);
        return view('pages.category.edit', compact('categories'));
    }

    public function update(Request $request, $category){
        $this->validate($request, [
            'category_name' => 'required|min:3'
        ]);

        $categories = Category::findOrFail($category);

        $categories->update([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('category.index')->with('success', 'Data has been updated!');
    }

    
}
