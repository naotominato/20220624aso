<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function created(Request $request)
    {
        $this->validate($request, lesson::$rules);
        $form = $request->all();
        lesson::create($form);
        return redirect('/thanks');
    }
}
