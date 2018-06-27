<?php

namespace App\Http\Controllers;

use App\About;
use App\contact;
use App\Terms;
use Illuminate\Http\Request;
//hier zitten alle pages in die we aangemaakt hebben.
class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Colly';
        return view('pages.index',compact('title'));
    }
    public function about(){
        $about = About::all();
        return view('pages.about', compact('about'));
    }


    public function contact(){
        return view('pages.contact');
    }

    public function categories(){
        return view('pages.categories');
    }

    public function summer(){
        return view('pages.summer');
    }
    public function winter(){
        return view('pages.winter');
    }

    public function terms(){
        $terms = Terms::all();
        return view('pages.terms', compact('terms'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        //check for correct user
        if(auth()->user()-> id !==$post->user_id){
            return view('/posts')->with('Error', 'Unauthorized');
        }
        return view('posts.edit')->with('posts', $post);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',


        ]);


        //createpost
        $post = new contact();
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->message = $request->input('message');

        $post->save();

        return redirect('/')->with('success', 'Contacted');

    }




}
