<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Task;

class TasksController extends controller {
    // public function __construct(){
    //     $this->middleware("auth");
    // }
    public function index(){
        //return DB::$table("Task")->all();
        $Tasks=Task::all();
        return response()->json($Tasks,200);
    }

    public function add( Request $request){
       //dd($request->all());
        $this->validate($request,[
            "name"=>'required|min:3'
            ]);
        $name=$request->input('name');
        $Taask=new Task();
        $Taask->name=$name;
        $Taask->user_id=Auth::id();
        $result=$Taask->save();
        
        return response()->json($Taask,200);
       
      // dd($request->get('name'));
       
    }
    
    public function delete($id){
       $deleteTask= Task::find($id);
      $deleteTask->delete();
       return response()->json($deleteTask,200);
    }
    public function edit($id){
        $task =Task::find($id);

        return response()->json(['task', $task],200);

    }
    public function update(request $request){
        
        $newTask=Task::find($request->id);
        $newTask->name=$request->name;
        $newTask->save();
        return response()->json(  $newTasks,200);
    }
}


