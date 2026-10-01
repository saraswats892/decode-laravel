<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdvocacyInAction;
use Illuminate\Support\Facades\Storage;

class AdvocacyInActionController extends Controller
{
    // Frontend
    public function index()
    {
        $advocacies = AdvocacyInAction::orderby('created_at', 'desc')->paginate(6);

        return view('advocacy-in-action', compact('advocacies'));
    }

    // Admin
    public function adminIndex()
    {
        $advocacies = AdvocacyInAction::orderby('created_at', 'desc')->get();

        return view('admin.advocacy-in-actions.index', compact('advocacies'));
    }

    public function create()
    {
        return view('admin.advocacy-in-actions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'link' => 'required',
        ]);

        $advocacy = new AdvocacyInAction;

        $advocacy->title = $request->title;
        $advocacy->description = $request->description;
        $advocacy->link = $request->link;

        if ($request->hasFile('image')) {
            $advocacy->image = $request->file('image')->store('advocacy-in-actions', 'public');
        }

        $advocacy->save();

        return redirect('/admin/advocacy-in-actions');
    }

    public function edit($id)
    {
        $advocacy = AdvocacyInAction::findOrFail($id);

        return view('admin.advocacy-in-actions.edit', compact('advocacy'));
    }

    public function update(Request $request, $id)
    {
        $advocacy = AdvocacyInAction::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'link' => 'required',
        ]);

        $advocacy->title = $request->title;
        $advocacy->description = $request->description;
        $advocacy->link = $request->link;

        if ($request->hasFile('image')) {

            if ($advocacy->image) {
                Storage::disk('public')->delete($advocacy->image);
            }

            $advocacy->image = $request->file('image')->store('advocacy-in-actions', 'public');
        }

        $advocacy->save();

        return redirect('/admin/advocacy-in-actions');
    }

    public function delete($id)
    {
        $advocacy = AdvocacyInAction::findOrFail($id);

        if ($advocacy->image) {
            Storage::disk('public')->delete($advocacy->image);
        }

        $advocacy->delete();

        return redirect('/admin/advocacy-in-actions');
    }
}