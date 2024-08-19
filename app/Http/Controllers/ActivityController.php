<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        // Renderiza a view localizada em resources/views/activity/index.blade.php
        return view('activity.index');
    }
}
