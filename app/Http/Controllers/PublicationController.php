<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::orderby('publish_date','desc')->paginate(3);
        // $publications = Publication::orderBy('publish_date', 'desc')->get();

        return view('publications', compact('publications'));
    }
    public function adminIndex()
    {
        $publications= Publication::orderby('publish_date','desc')->get();
        return view('admin.publications',compact('publications'));
    }
    public function create(){
        return view('admin.publicedit');
    }
    public function edit($id)
{
    $publication = Publication::findOrFail($id);

    return view('admin.publicedit', compact('publication'));
}
public function store(Request $request)
{
    $request->validate(['title'=>'required',
    'publish_date' => 'required|date',
        'image' => 'required|image|mimes:jpeg,png,jpg',
        'link' => 'required|url',
        ]);
    $publication = new Publication();

    $publication->title = $request->title;
    $publication->publish_date = $request->publish_date;
     $imagePath = $request->file('image')->store('publications', 'public');
    $publication->image = $imagePath;

    $publication->link = $request->link;

    $publication->save();

    return redirect('/admin/publications');
}
public function update(Request $request,$id){
   $publication = Publication::findOrFail($id);
    $request->validate([
        'title' => 'required',
        'publish_date' => 'required|date',
        'image' => 'nullable|image|mimes:jpeg,png,jpg',
        'link' => 'required|url',
    ]);
    $publication->title = $request->title;
    $publication->publish_date = $request->publish_date;
    $publication->link = $request->link;
    if ($request->hasFile('image')) {

    if ($publication->image) {
        Storage::disk('public')->delete($publication->image);
    }
        $imagePath = $request->file('image')->store('publications', 'public');
        $publication->image = $imagePath;
    }


    $publication->save();

    return redirect('/admin/publications');
}
public function delete($id)
{
    $publication = Publication::find($id);

    if ($publication->image) {
        Storage::disk('public')->delete($publication->image);
    }

    $publication->delete();

    return redirect('/admin/publications');
}
}