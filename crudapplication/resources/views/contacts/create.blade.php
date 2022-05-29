@extends('contacts.layout')
@section('content')

</br>
<div class="card">
  <div class="card-header"><h3>Create the Mennr Items<h3></div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Your Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        
        <!-- <label>What do you want to Generate?</label></br>
        <input type="checkbox" name="alpha">
        <label>Albhabet</label><br/>
        <input type="checkbox" name="number">
        <label>Numeric</label><br/><br/> -->

        <label>Number of times to generate</label></br>
        <select class="form-control" name="option">
         <option selected>Generator Dropdown</option>
         <option value=1>1</option>
         <option value=100>100</option>
         <option value=1000>1000</option>
         <option value=10000>10000</option>

        </select>
        </br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop