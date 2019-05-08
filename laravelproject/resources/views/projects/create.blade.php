@extends('layout')

@section('title', 'About Us')

@section('content')
    <center><h1 style="font-size: 80px"> Create New Product <h1></center><br><br>
        
 

    <center><form method="POST" action="/projects">
        {{ csrf_field() }}
        
        <div>
            <input class="input" type="text" name="title" placeholder="Product name">
         </div>

        <div>
            <input class="input" type="text" name="subtitle" placeholder="Product type">
         </div>

         <div>
                <input class="input" type="text" name="info" placeholder="Product information">
        </div>
        
            
         <div> 
                    <input class="input" type="text" name="image" placeholder="Url Image">
        </div>


         <div class="field">
                <div class="control">
                    <button style= "float:right;" type="submit" class="button is-dark button is-outlined">Create Product</button>
                </div>
    </form></center>

  
        
        
@endsection
