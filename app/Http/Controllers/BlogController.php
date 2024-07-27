<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Blog::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'image_path' => $imagePath,
            'author' => $request->author
        ]);

        return redirect()->route('blog.create')->with('success', 'Blog post created successfully.');
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|string',
        ]);

        $blog = Blog::findOrFail($id);
        $imagePath = $blog->image_path;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $blog->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'image_path' => $imagePath,
            'author' => $request->author
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog post updated successfully.');
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image_path) {
            Storage::disk('public')->delete($blog->image_path);
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog post deleted successfully.');
    }
    public function show(){
        return view('blog.blogpost');
    }
}
