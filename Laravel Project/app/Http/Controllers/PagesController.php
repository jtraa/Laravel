<?php

namespace App\Http\Controllers;
use App\macbook;

class PagesController extends Controller
{
   public function home()
   {
            return view('welcome', [
               'foo' => 'bar'
            ]);
   }

   public function about()
   {
            return view('about');
   }

   public function contact()
   {
            return view('contact');
   }

   public function index() 
    {
            $projects = macbook::all();

            return view('projects.index', compact('projects'));
    }
   
    public function create()
    {
       return view('projects.create');
    }

    public function show()
    {

    }

    public function edit($id)
    {
      
      $project = macbook::find($id);
      return view('projects.edit', compact('project'));
    }

    public function update()
    {
      
    }

    public function destroy()
    {

    }
    public function store()
    {
       $project = new macbook();

       $project->title = request('title');
       $project->subtitle = request('subtitle');
       $project->info = request('info');
       $project->image = request('image');
       
       $project->save();

       return redirect('/projects');
    }
    
}