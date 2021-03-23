<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Todo;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $todo1 = Todo::all();
        
        return view('todo1.index', compact('todo1'));
        
    }




    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'details' => 'required',
            'user_id' => 'required'
            
        ]);

        Todo::create($request->all());

      
        return redirect('/todo1');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */

    public function showUser()
    {
        $dataUser = User::all();
        return view('todo1.create',['dataUser'=>$dataUser]);
    }

    public function show(Todo $todo, $id)
    {
        $todo = Todo ::find($id);

        return view('todo1.show',['todo'=>$todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('todo1.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
      $todo = Todo::find($request->id);

      $todo->name=$request->name;
      $todo->subject=$request->subject;
      $todo->user_id=$request->user_id;
      $todo->details=$request->details;
      $todo->completed=$request->completed;

      $todo->save();

        return redirect('/todo1');
    }


    public function save(Request $request, Todo $todo)
    {
      $todo = new Todo();

      $todo->name=$request->name;
      $todo->subject=$request->subject;
      $todo->user_id=$request->user_id;
      $todo->details=$request->details;
      $todo->completed=$request->completed;

      $todo->save();

        return redirect('/todo1');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
      
        $todo->delete();

        return redirect('/todo1');
    }

  
    
}