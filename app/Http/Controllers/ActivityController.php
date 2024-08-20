<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('activity.index', compact('activities'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'data' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'descricao' => 'nullable|string',
            'cor' => 'nullable|string|max:7',
        ]);

        Activity::create($validatedData);
        return redirect()->route('activity.index');
    }

    public function edit(Activity $activity)
    {
        return view('activity.edit_index', compact('activity'));
    }

    public function update(Request $request, Activity $activity)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'data' => 'required|date',
            'hora' => 'required|nullable|string',
            'descricao' => 'nullable|string',
            'cor' => 'nullable|string|max:7',
        ]);

        $activity->update($validatedData);
        return redirect()->route('activity.index');
    }
}
