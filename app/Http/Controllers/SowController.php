<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sow;

class SowController extends Controller
{
    public function index()
    {
        $sows = Sow::all();
        return view('sows.index', compact('sows'));
    }

    public function create()
    {
        return view('sows.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        // Jika berhasil

        Sow::create($validate);

        return redirect()->route('sows.index')->with('success', 'SOW : ' . $validate['title'] . ', created successfully.');
    }

    public function edit(Sow $sow)
    {
        return view('sows.edit', compact('sow'));
    }

    public function update(Request $request, Sow $sow)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        // Jika berhasil validasi, maka update data

        $sow->update($validate);

        return redirect()->route('sows.index')->with('success', 'SOW : ' . $validate['title'] . ', updated successfully.');
    }

    public function destroy(Sow $sow)
    {
        $sow->delete();
        return redirect()->route('sows.index')->with('success', 'SOW : ' . $sow->title . ', Deleted successfully.');
    }
}
