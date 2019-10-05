<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use Auth;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $sve = Comment::orderBy('id', 'desc')->paginate(4);
        return view('after',compact('sve'));
      
        
    }


    public function admin(){

      return view('admin');

    }

    public function comment(Request $request){
        $this->validate($request,[

            'description' => 'required|min:2|max:500',
            'rating' => 'required|integer|max:5|min:1',
            
        ]);

        Comment::create([
            'description' => $request->description,
            'rating' => $request->rating,
             'email' => Auth::User()->email,
             'name' => Auth::User()->name,
            'user_id'=> Auth::User()->id,
        ]);

        
        Session::flash('comment', "Successfully posted comment");
        return back();

    }


    public function deletecomment($id){
        $comment = Comment::find($id);
        $comment->delete();
        Session::flash('deletecomm', "Successfully delete comment");
        return back();

    }

    public function updatecomment($id){
        $comm = Comment::find($id);
        return view('insert', compact('comm'));

    }

    public function insert(Request $request,$id){
        $this->validate($request,[

            'description' => 'required|min:2|max:500',
            'rating' => 'required|integer|max:5|min:1',
            
        ]);
        $comm = Comment::find($id);
        if($comm->user_id === Auth::User()->id){
        $comm->description = $request->description;
        $comm->rating = $request->rating;
        $comm->save();
        return redirect('/home');
        }else{
             return redirect('/home');   
         }
    }


}
