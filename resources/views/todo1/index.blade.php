@extends('layouts.app')


@section('styles')
<style>
.dataTables_scrollBody, .dataTables_wrapper {
    position: static !important;
}
.dropdown-button {
    cursor: pointer;
    font-size: 2em;
    display:block
}
.dropdown-menu i {
    font-size: 1.33333333em;
    line-height: 0.75em;
    vertical-align: -15%;
    color: #000;
}
</style>
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Assignments List </h2>
            </div>
            <div class="col">
            <div class="pull-right">
                <a class="btn btn-success float-right" href="/todo1/{{ Auth::user()->id}}/create" title="Create a List"> <i class="fas fa-plus-circle">New Assignment</i>
  
                    </a>
             
            </div>
            </div>
            <br>
            <br>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        
     @php
        $num =1;
        $r= DB::table('todo1')->get('user_id')->where('user_id', '=', Auth::user()->id);
        $totalr = count($r);
   
     @endphp
  
  @if($totalr == 0)
  
        <tr>
            <td>#</td>
            <td><span>No assignments yet! Create one?</span></td>
            <td><span>None</span></td>
            <td><span>Actions not available</span></td>
           
        </tr>
   
   @else
   @foreach ($todo1 as $list)
             @if(auth()->user()->id == $list->user_id)
 <tr>
            <td>{{ $num++}}</td>

                <td>{{ $list->name }}</td>
           
              @if($list->completed==0)
              <td>Not completed</td>
              @else
              <td>Completed</td>
                @endif


                <td>
                    <form action="/todo1/{{ $list->id }}" method="POST">

       @if($list->completed==0)
       <a href="/todo1/{{ $list->id }}/edit" class="text-xl font-bold text-blue-500">Edit</a>
              @else
              <a href="/todo1/{{ $list->id }}/show" class="text-xl font-bold text-blue-500">Show</a>
                @endif
                    
                     

                      
                     
      
                @csrf
                @method('DELETE')
                <button class="ml-4 bg-red-500 tracking-wide text-black px-6 ">Delete</button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
            @endif

    </table>

@endsection

