<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Jobs\SendEmailJob;
use App\Mail\newprojectMail;
use App\Newemail;
use App\Project;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Image;
use Mail;
use Session;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); 
    }

    public function index(){
      return view('add');
   }

   	public function comm(){
	   	$comments = Comment::paginate(10);
	   	return view('admin', compact('comments'));
   }

   public function delete($id){
   	$comment = Comment::find($id);
   	$user = User::where('id' , $comment->user_id);
   	$user->delete();
   	$comment->delete();
   	Session::flash('uscomm' , 'Success delete Admin!');
   	return back();

   }

   public function upload(Request $request){

    $this->validate($request, [
      'name' => 'required',
      'description' => 'required',
      'profile_img' => 'required'
    ]);






    if($request->hasFile('profile_img')) {
        //get filename with extension
        $filenamewithextension = $request->file('profile_img')->getClientOriginalName();
 
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
 
        //get file extension
        $extension = $request->file('profile_img')->getClientOriginalExtension();
 
        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;
 
        //Upload File
        $request->file('profile_img')->storeAs('public/profile_img', $filenametostore);
 
        //Resize image here
        $thumbnailpath = public_path('storage/profile_img/'.$filenametostore);
       
        $img = Image::make($thumbnailpath)->resize(400, 220)->save($thumbnailpath);

     
          Project::create([
          'name' => $request->name,
          'description' => $request->description,
          'profile_img' => $filenametostore,
          'video' => $request->video,
          'git' => $request->git,
          'live' => $request->live

         ]);

        $project = Project::latest()->first();
        $emails = Newemail::all();

        foreach ($emails as $email) {
          dispatch(new  SendEmailJob($email, $project));
        }

          
         Session::flash('admin' , 'Success upload Admin!!');
          
         return back();          
    }else{
      return back();
    }

   }










}
