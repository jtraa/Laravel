@extends('layout')

@section('title', 'Products')
@section('content')
<center><h1 style="font-size: 80px"> Products <h1></center><br>

    
<div id="products">
       
    @foreach($projects as $project)
    <div class="card">
    <ul><li class="title">{{$project ->title}}</li>
        <li class="subtitle"><strong>{{$project ->subtitle}}</strong></li>
        <li class="subtitle">{{$project ->info}}</li>
    <img class="img" src= {{$project ->image}}>
    @endforeach
</div>
</div>

@endsection

 