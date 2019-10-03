<?php

namespace App\Http\Controllers;


use App\Mail\contantmail;
use App\Mail\Newmail;
use App\Newemail;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mail;
use Session;
class PortfolioController extends Controller
{


    public function index(){
        $sve = Comment::orderBy('id', 'desc')->paginate(4);
        return view('index',compact('sve'));
    }

    public function download()
    {
    	return Storage::download('PoslovniCV.docx');
    }

    public function mail(Request $request)
    {
    	$this->validate($request,[

    		'name' => 'required|max:30|min:2',
    		'email' => 'required|email|max:100|min:4',
    		'question' => 'required|max:1000|min:3',
    	]);

    	$informacije = [
    		'name' => $request->name,
    		'email' => $request->email,
    		'question' => $request->question,
    	];

    	Mail::to('vukzdravkovic69@gmail.com')->send(new contantmail($informacije));
    	Session::flash('notif', "successful message sending");
    	return back();
    } 

    public function new(Request $request){
        $this->validate($request,[

            'email' => 'required|unique:newemails|email|max:100|min:4',
        ]);

        Newemail::create([
            'email' => $request->email,
        ]);
        $user = [
            'email' => $request->email,
            'id' => Newemail::latest()->first()->id,
        ];
        Mail::to($user['email'])->send(new Newmail($user));
        Session::flash('new', "You have successfully applied, check your mail to unsubscribe");
        return back();

    }

    public function deletemail(Request $request, $id){

        $email = Newemail::find($id);
        $email->delete();

        return redirect('/');

    }











}
