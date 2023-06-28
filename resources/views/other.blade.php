@extends('layouts.app')
@section('page-title', 'Title Override: Other Page')
@section('content')
<div class="container my-3">
    <h1>Other Page</h1>
    <div class="row g-4">
        <div class="col-12">
            <section>
                <h3>{{$data[0]['title']}}</h3>
                <p>{{$data[0]['description']}}</p>
                <img class="other" src="{{$data[0]['thumb']}}" alt="img">
                <small>{{$data[0]['price']}}</small>
                <ul>
                    @foreach($data[0]['artists'] as $oggetto )
                    
                    <li>{{$oggetto}}</li>
                    @endforeach
                </ul>
            </section>
        </div>
        
    
    </div>

</div>
@endsection