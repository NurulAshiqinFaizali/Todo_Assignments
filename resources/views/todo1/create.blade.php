@extends('layouts.app')




@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary float-right" href="/todo1" title="Go back"> <i class="fas fa-backward ">Return</i> </a>
            </div>
            <br>
            <br>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/todo1/submit">
            @csrf
           
           
         <input type="hidden" name="user_id" value="{{ Auth::user()->id }} ">
        
            
         <input type="hidden" name="completed" value="0">
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" style="text-transform:capitalize" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Subject</strong>
                    <input type="text" name="subject" class="form-control" style="text-transform:uppercase" placeholder="Subject">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    <textarea class="form-control" style="height:50px" style="text-transform:capitalize" name="details"
                        placeholder="Details"></textarea>
                </div>
            </div>
                    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
  

@endsection