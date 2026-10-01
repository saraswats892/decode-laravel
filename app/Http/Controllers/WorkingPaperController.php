<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkingPaper;
use Illuminate\Support\Facades\Storage;

class WorkingPaperController extends Controller
{
    //
    public function index()
    {
    $working_papers= WorkingPaper::orderby('id','asc')->paginate(2);
    return view ('working-papers', compact('working_papers'));
    }
    
    public function adminIndex()
{
    $working_papers = WorkingPaper::orderby('id','desc')->paginate(10);

    return view('admin.working-papers', compact('working_papers'));
}
public function create()
{
    return view('admin.workingpapers.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg',
        'pdf' => 'nullable|mimes:pdf',
    ]);
      
    $working_paper = new WorkingPaper();

    $working_paper->title = $request->title;
    $working_paper->description = $request->description;

    if ($request->hasFile('image')) {
        $working_paper->image = $request->file('image')->store('working-papers', 'public');
    }

    if ($request->hasFile('pdf')) {
        $working_paper->pdf = $request->file('pdf')->store('working-papers', 'public');
    }

    $working_paper->save();

    return redirect('/admin/working-papers');
}

public function edit($id)
{
    $working_paper = WorkingPaper::findOrFail($id);

    return view('admin.workingpapers.edit', compact('working_paper'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable',
        'pdf' => 'nullable|mimes:pdf',
    ]);

    $working_paper = WorkingPaper::findOrFail($id);

    $working_paper->title = $request->title;
    $working_paper->description = $request->description;

    if ($request->hasFile('image')) {
         //Storage::disk('public')->delete($working_paper->image);
        $working_paper->image = $request->file('image')->store('working-papers', 'public');
    }

    if ($request->hasFile('pdf')) {

    if ($working_paper->pdf) {
        Storage::disk('public')->delete($working_paper->pdf);
    }

       // Storage::disk('public')->delete($working_paper->pdf);
        $working_paper->pdf = $request->file('pdf')->store('working-papers', 'public');
    }

    $working_paper->save();

    return redirect('/admin/working-papers');
}
public function delete($id)
{
    $working_paper = WorkingPaper::find($id);

    if ($working_paper->image) {
        Storage::disk('public')->delete($working_paper->image);
    }
    if ($working_paper->pdf) {
        Storage::disk('public')->delete($working_paper->pdf);
    }
    $working_paper->delete();

    return redirect('/admin/working-papers');
}
}
