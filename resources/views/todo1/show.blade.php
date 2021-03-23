@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show List </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary float-right" href="/todo1" title="Go back"> <i class="fas fa-backward "></i>Return </a>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-responsive-lg">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <tr>
                <div class="form-group">
           <td>     <strong>Subject</strong></td>
                <!-- {{ $todo->name }} -->
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        
                <div class="form-group">
           <td>     <strong>Name</strong></td>
                <!-- {{ $todo->name }} -->
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <td> <strong>Description</strong></td>
                <!-- {{ $todo->details }} -->
            </div>
        </div>
  
        <div class="col-xs-12 col-sm-12 col-md-12">
         
                <div class="form-group">
           <td>     <strong>Status</strong></td>
                <!-- {{ $todo->name }} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td>   <strong>Date Created</strong></td>
                <!-- {{ $todo->created_at }} -->
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td>   <strong>Date Updated</strong></td>
                <!-- {{ $todo->updated_at }} -->
            </div>
        </div>
</tr>

<tr>
<td>{{ $todo->subject }}</td>
<td>{{ $todo->name }}</td>
<td>{{ $todo->details }}</td>
@if( $todo->completed == 0)
<td>Not completed</td>
@else
<td>Completed</td>
@endif
<td>{{ $todo->created_at }}</td>
<td>{{ $todo->updated_at}}</td>
</tr>

    </div>
</table>
@endsection