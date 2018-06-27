<?php

namespace App\Http\Controllers;

use App\About;
use App\Admin;
use App\Comment;
use App\Contact;
use App\Terms;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //about index
    {
        $about = About::all(); //hier roep je de model (alles)
        return view('admin',compact('about'))->with('admin', $about);
    }

    public function adminIndex() //admin index
    {
        $admin = Admin::all(); //hier roep je de model (alles)
        return view('admin.admin-show',compact('admin'))->with('admin', $admin);
    }

    public function termsIndex() //terms and privacy index
    {
        $terms = Terms::all(); //hier roep je de model (alles)
        return view('admin.terms-show',compact('terms'))->with('terms', $terms);
    }

    public function aboutIndex() //about index
    {
        $about = About::all(); //hier roep je de model (alles)
        return view('admin.about-show',compact('about'))->with('about', $about);
    }

    public function commentIndex() //coment index
    {
        $comment = Comment::all(); //hier roep je de model (alles)
        return view('admin.comment-show',compact('comment'))->with('comment', $comment);
    }

    public function contactIndex() //contact index
    {
        $allcontact = Contact::all(); //hier roep je de model (alles)
        return view('admin.contact-show',compact('allcontact'))->with('allcontact', $allcontact);
    }
    public function userIndex() /// index of all users
    {
        $user = User::all(); //hier roep je de model (alles)
        return view('admin.users',compact('user'))->with('alluser', $user);
    }



    public function createAbout() // create about page
    {
        return view('admin.about-create');
    }

    public function storeAbout(Request $request) //store the about in the database and site
    {
        $this->validate($request, [
            'text' => 'required',

        ]);
        //createpost
        $about = new About();
        $about->text = $request->input('text');
        $about->save();

        return redirect('/about')->with('success', 'About added');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editAbout($id) //edit the about page on the site
    {
        $about = About::find($id);
        return view('admin.about-edit')->with('about', $about);
    }

    public function editContact($id) //edit the contact all the admins has received
    {
        $contact = Contact::find($id);
        return view('admin.contact-edit')->with('about', $contact);
    }
    public function editUser($id) //edit the user stuff
    {
        $allusers = User::find($id);
        return view('admin.user-edit')->with('user', $allusers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAbout(Request $request, $id) //edit the about page
    {
        $this->validate($request, [
            'text' => 'required',
        ]);
        $about = About::find($id);
        $about->text = $request->input('text');


        $about->save();

        return redirect('/about')->with('success', 'Editted');
    }



    public function destroy($id) //delete the about section
    {
        $about = About::find($id);

        $about->delete();
        return redirect('/admin')->with('succes', 'About Deleted');
    }



    public function createTerms() //create a terms and privacy on the page
    {

        return view('admin.terms-create');
    }

    public function storeTerms(Request $request) // store the terms and privacy in the DB
    {
        $this->validate($request, [
            'terms' => 'required',

        ]);
        //createpost
        $terms = new Terms();
        $terms->terms = $request->input('terms');
        $terms->save();

        return redirect('/terms')->with('success', 'Terms added');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editTerms($id) //edit the terms and privacy
    {
        $terms = Terms::find($id);
        return view('admin.terms-edit')->with('terms', $terms);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTerms(Request $request, $id) //update the terms and privacy
    {
        $this->validate($request, [
            'terms' => 'required',
        ]);
        $terms = Terms::find($id);
        $terms->terms = $request->input('terms');


        $terms->save();

        return redirect('/terms')->with('success', 'Editted');
    }

    public function destroyTerms($id) //delete the terms and privacy
    {
        $terms = Terms::find($id);

        $terms->delete();
        return redirect('/admin')->with('succes', 'Terms Deleted');
    }
    public function updateUser(Request $request, $id) //update the user
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');


        $user->save();

        return redirect('/admin')->with('success', 'Editted');
    }

    public function destroyUser($id)//destroy the user
    {
        $user = User::find($id);

        $user->delete();
        return redirect('/admin')->with('succes', 'Terms Deleted');
    }


    public function createAdmin()//create a new admin
    {
        return view('admin.admin-create');
    }

    public function storeAdmin(Request $request) // store the new admin in the DB
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'job_title' => 'required',

        ]);
        //createpost
        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password');
        $admin->job_title = $request->input('job_title');
        $admin->save();

        return redirect('/admin')->with('success', 'Admin added');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editAdmin($id) //edit the admin
    {
        $admin = Admin::find($id);
        return view('admin.edit')->with('admin', $admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAdmin(Request $request, $id) //update the admin
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'job_title' => 'required',




        ]);
        $admin = Admin::find($id);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->job_title = $request->input('job_title');


        $admin->save();

        return redirect('/admin')->with('success', 'Editted');
    }

    public function destroyAdmin($id) //delete the admin
    {
        $admin = Admin::find($id);

        $admin->delete();
        return redirect('/admin')->with('succes', 'Admin Deleted');
    }

    public function createComment() //create new comment
    {
        return view('admin.comment-create');
    }

    public function storeComment(Request $request) //store the new comment
    {
        $this->validate($request, [
            'title' => 'required',
            'length' => 'required',

        ]);
        //createpost
        $comment = new Comment();
        $comment->title = $request->input('title');
        $comment->length = $request->input('length');
        $comment->save();

        return redirect('/comment/commentIndex')->with('success', 'Comment added');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editComment($id) //edit the new comment
    {
        $comment = Comment::find($id);
        return view('admin.comment-edit')->with('comment', $comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateComment(Request $request, $id) //update the new comment
    {
        $this->validate($request, [
            'title' => 'required',
            'length' => 'required',
        ]);
        $comment = Comment::find($id);
        $comment->title = $request->input('title');
        $comment->length = $request->input('length');


        $comment->save();

        return redirect('/comment/commentIndex')->with('success', 'Editted');
    }

    public function destroyComment($id)
    {
        $comment = Comment::find($id);

        $comment->delete();
        return redirect('/comment/commentIndex')->with('succes', 'Comment Deleted');
    }

    public function searchcontent(){

        $admin = Admin::where('name', 'LIKE', '%' . request('name') .'%')->get();
        return view('searchcontent',compact('admin'));
    }
    public function searchcontent2(){

        $posts = Post::where('title', 'LIKE', '%' . request('title') .'%')->get();
        return view('searchcontent2',compact('posts'));
    }
    public function searchcontent3(){

        $user = User::where('name', 'LIKE', '%' . request('name') .'%')->get();
        return view('searchcontent3',compact('user'));
    }


}
