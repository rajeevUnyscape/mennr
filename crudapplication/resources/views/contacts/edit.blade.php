@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Mennr Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
        <label>Option</label></br>
        <input type="text" name="option" id="option" value="{{$contacts->option}}" class="form-control"></br>
        <label>Value</label></br>
        <input type="text" name="value" id="value" value="{{$contacts->value}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop