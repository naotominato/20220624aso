<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class TodoController extends Controller
{

    public function index(todo $todo)
    {

        $items = todo::all();
        return view('index', compact('items'));
    }

    public function create(Request $request)
    {
        $this->validate($request, todo::$rules);
        $items = $request->all();
        unset($items['_token']);
        todo::create($items);
        return redirect('/');
    }


    public function update(Request $request)
    {
        $this->validate($request, todo::$rules);
        $items = $request->all();
        unset($items['_token']);
        todo::where('id', $request->id)->update($items);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        todo::find($request->id)->delete();
        return redirect('/');
    }
}

