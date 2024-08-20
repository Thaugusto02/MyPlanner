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

        Activity::createActivity($validatedData);
        return redirect()->route('activity.index');
    }
}