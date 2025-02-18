<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\support\str;
use Illuminate\Support\Facades\Storage;
class MediaController extends Controller
{
    public function index()
    {
        $media = Media::get();
        return view('admin.media.index', compact('media'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required|unique:media,media_title',
            'slug' => 'nullable',
            'description' => 'nullable',
        ]);
        $imagePath = null;
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('medias', 'public');
        }
        Media::create([
            'media_type' => $request->type,
            'media_title' => $request->name,
            'media_slug' => Str::slug($request->name),
            'description' => $request->description,
            'status' => "Deactive",
            'img' => $imagePath
        ]);

        return redirect()->route('media')->with('success', 'Media Added!');
    }

    public function edit($id)
    {
        $media = Media::findorfail($id);
        return view('admin.media.edit', compact('media'));
    }

    public function update(Request $request, $id)
{
    $media = Media::findOrFail($id);

  

    $request->validate([
        'media_type' => 'required',
        'name' => 'required|unique:media,media_title,' . $media->id, // Fixed validation rule
        'slug' => 'nullable',
        'description' => 'nullable',
    ]);

    // Handle file upload
    if ($request->hasFile('img')) {
        // Delete the old image if exists
        if ($media->img) {
            Storage::delete('public/' . $media->img);
        }

        // Store the new image
        $imagePath = $request->file('img')->store('medias', 'public');
    } else {
        // Keep the old image if no new one is uploaded
        $imagePath = $media->img;
    }

    // Update the media record
    $media->update([
        'media_type' => $request->media_type,
        'media_title' => $request->name, // Corrected field name
        'media_slug' => Str::slug($request->name), // Corrected field name
        'description' => $request->description,
        'img' => $imagePath
    ]);

    // Redirect with success message
    return redirect()->route('media')->with('success', 'Media Updated!');
}


    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        if ($media->img) {
            Storage::delete('public/'.$media->img);
        }
        $media->delete();
        return redirect()->route('media')->with('success', 'Category Deleted!');
    }

    public function updateStatus(Request $request, $id)
    {
        $media = Media::findOrFail($id);
        $media->update([
            'status' => $request->status
        ]);
        return response()->json(['success' => true, 'message' => 'Status updated successfully']);
    }
}
