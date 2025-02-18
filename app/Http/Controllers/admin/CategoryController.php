<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('admin.category.index', compact('category'));
    }
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'slug' => 'nullable',
            'description' => 'nullable',
        ]);

        $imagePath = null;
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('categories', 'public');
        }

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'status' => "Deactive",
            'img' => $imagePath
        ]);

        return redirect()->route('category')->with('success', 'Category Added!');
    }
    public function edit($id)
    {
        $category = Category::findorfail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request,  $id)
    {
        $category = Category::findorfail($id);

        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'description' => 'nullable',
        ]);

        if ($request->hasFile('img')) {
            if ($category->img) {
                Storage::delete('public/' . $category->img);
            }
            $imagePath = $request->file('img')->store('categories', 'public');
        } else {
            $imagePath = $category->img;
        }

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'img' => $imagePath
        ]);

        return redirect()->route('category')->with('success', 'Category Updated!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if($category->product()->exists()){
            return redirect()->route('category')->with('error', 'Category cannot be deleted! Products exist under this category.');
        }
        if ($category->img) {
            Storage::delete('public/'.$category->img);
        }
        $category->delete();

        return redirect()->route('category')->with('success', 'Category Deleted!');
    }

    public function updateStatus(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'status' => $request->status
        ]);

        return response()->json(['success' => true, 'message' => 'Status updated successfully']);
    }
}
