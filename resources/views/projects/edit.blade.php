@extends('layout')

@section('title', 'About Us')

@section('content')

<center><h1 style="font-size: 80px;"> Update Product <h1></center>

    <form method="POST" action="/projects/{{$project ->id}}">
            {{ csrf_field() }}
        <div class="field">
            <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>
    </div>
    
            <div class="field">
                <label class="label" for="subtitle">Subtitle</label>
            <div class="control">
                <input type="text" class="input" name="subtitle" placeholder="Title" value="{{ $project->subtitle}}">
            </div>
        </div>
        <div class="field">
                <label class="label" for="image">Image</label>
            <div class="control">
                <input type="text" class="input" name="image" placeholder="Title" value="{{ $project->image}}">
            </div>
        </div>

    <div class="field">
        <label class="label" for="info">Information</label>
        <div class="control">
            <input type="text" name="info" class="textarea" rows="8" placeholder="Title" value="{{ $project->info}}">
        </div>
    </div>
   
    <div class="field">
            <div class="control">
                <button style= "float:right;" type="submit" class="button is-dark button is-outlined">Update Product</button>
            </div>
        </div>
    </form>

@endsection