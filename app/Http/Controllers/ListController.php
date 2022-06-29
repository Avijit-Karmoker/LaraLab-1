<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ListController extends Controller
{
    function todolistinsert(Request $request)
    {
        ToDoList::insert([
            'list_name' => $request->list_name,
            'date' => $request->date,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }

    function todolist()
    {
        return view('todolist', [
            'todolists' => ToDoList::all()
        ]);
    }

    function todolistedit(Request $request, $id)
    {
        ToDoList::find($id)->update([
            'status' => 'done',
        ]);
        return back();
    }
}
