<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use App\Components\FlashMessages;
use App\Http\Controllers\Controller;
use Session;


class TaskController extends Controller
{
	
     public function show()
    {
    	$tasks = Task::orderBy('created_at', 'asc')->get();
    	return view('tasks', [
        	'tasks' => $tasks
    	]);
    }

    public function postdata(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
    	
     	$task = new Task;
    	$task->name = $request->name;
    	$task->save();
    	
    	return redirect()->route('showinsertdata')->with('success','Record Successful inserted!');
    }

    public function deletedata($id)
    {
     	$task = Task::find($id);
     	$task->delete();
     	
	   return redirect()->route('showinsertdata')->with('success','successful deleted data!');
    }
	public function update($id)
    {
    	$task = Task::findOrFail($id);
    return view('editupdate')->withTask($task);
	
    }
    public function postupdatedata(Request $request,$id)
    {

    	$task = Task::findOrFail($id);
    	$task->name = $request->input('name');
    	$task->save();
    	
    	return redirect()->route('showinsertdata')->with('success','successful updated data!');
    	
    }
}
