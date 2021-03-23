@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Assignment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary float-right" href="/todo1" title="Go back"> <i class="fas fa-backward "></i>Return</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ada eror ni ha!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/todo1">
        @csrf
        <input type="hidden" name="user_id" value="{{$todo->user_id}}">

        <input type="hidden" name="id" value="{{$todo->id}}">

        <input type="hidden" name="subject" value="{{$todo->subject}}">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$todo['name']}}" class="form-control" >              
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" style="height:50px" name="details" value="{{$todo['details']}}">{{$todo['details']}}
                        </textarea>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select class="form-control form-control-sm shadow-sm selectpicker status" data-statusid="{{$todo->id}}" name ="completed">
                                        
                    @if($todo['completed'] === 0)
                    <option value="0" selected data-content="<span class='badge badge-pill badge-primary'>Not Completed</span>">Not Completed</option>
                    <option value="1"  data-content="<span class='badge badge-pill badge-success'>Completed</span>">Completed</option>   

                    @else    
                    <option value="1" selected data-content="<span class='badge badge-pill badge-success'>Completed</span>">Completed</option>
                    <option value="0"  data-content="<span class='badge badge-pill badge-primary'>Not Completed</span>">Not Completed</option>                   

                    @endif
                                   
                   </select>
                </div>
            </div>

         
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection