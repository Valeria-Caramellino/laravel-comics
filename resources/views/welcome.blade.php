@extends('layouts.app')

@section('content')
<div class="container bg-dark">
    <div class="row  text-light">
      
      <div class="col-3 rounded">
        <h4 class="m-2" >CURRENT SLIDE</h4>
      </div>
      
     
      <div class="d-flex flex-wrap col-10 mx-auto">
        <!--dinamico preso da app.Vue-->
        
        @foreach($data as $oggetto)
        
          <div class="m-4 my-card d-flex flex-column rounded">
            <div class="my-class ">
              <img class="rounded-top"  src= "{{$oggetto['thumb']}}" alt=""> 
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <p>{{ $oggetto['title'] }}</p>
            </div>              
          </div>
        @endforeach

      </div>
        
     
    </div>
  </div>

@endsection