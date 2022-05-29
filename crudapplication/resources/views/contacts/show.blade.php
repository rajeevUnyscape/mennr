@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Mennr Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $contacts->name }}</h5>
        <p class="card-text">Option : {{ $contacts->option }}</p>
        <p class="card-text">Value : {{ $contacts->value }}</p>
        
  </div>
       
    </hr>
  
  </div>
</div>