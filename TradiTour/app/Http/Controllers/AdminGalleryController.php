<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class AdminGalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::all();
        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Gallery::create(['image' => $imageName]);

        return redirect()->route('admin.gallery.index')
                        ->with('success', 'Image uploaded successfully.');
    }

    public function edit($id)
    {
        $image = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $image->image = $imageName;
        }

        $image->save();

        return redirect()->route('admin.gallery.index')
                        ->with('success', 'Image updated successfully.');
    }

    public function destroy($id)
    {
        $image = Gallery::findOrFail($id);
        $image->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted successfully.');
    }
}
