@extends('layout')

@section('title', 'About Us')
<center><h1 style="font-size: 80px"> Products <h1></center>
@section('content')
    
<div id="products">       
    @foreach($projects as $project)
    <div class="cards">
    <ul><li class="title">{{$project ->title}}</li>
        <li class="subtitle"><strong>{{$project ->subtitle}}</strong></li>
        <li class="subtitle">{{$project ->info}}</li></ul>
    <img src= {{$project ->image}}>
    
    </div>
    @endforeach
</div>


 


    
    
    
        
@endsection

 