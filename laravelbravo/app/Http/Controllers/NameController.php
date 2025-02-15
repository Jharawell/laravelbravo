<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index()
    {
        $names = Name::all();
        return view('names.index', compact('names'));
    }

    public function create()
    {
        return view('names.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Name::create($request->all());

        return redirect()->route('names.index');
    }

    public function edit($id)
    {
        $name = Name::findOrFail($id);
        return view('names.edit', compact('name'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $name = Name::findOrFail($id);
        $name->update($request->all());

        return redirect()->route('names.index');
    }

    public function destroy($id)
    {
        $name = Name::findOrFail($id);
        $name->delete();

        return redirect()->route('names.index');
    }
}
