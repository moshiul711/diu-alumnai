<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SocialController extends Controller
{
    public function login(){
        $admin_id = Session::get('user_id');
        if (isset($admin_id)){
            return Redirect::to('/social');
        }
        return view('alumniSocial.login');
    }

    public function loginCheck(Request $request){
        $admin_email = $request->input('name');
        $admin_password = $request->input('password');
        $type = $request->input('type');
        $result = DB::table('users')
            ->where('email',$admin_email)
            ->where('password',$admin_password)
            ->where('type',$type)
            ->first();
        if ($result){
            Session::put('user_id',$result->iduser);
            Session::put('user_unique_id',$result->unique_id);
            Session::put('user_name',$result->name);
            Session::put('user_type',$result->type);
            Session::put('user_image',$result->image);
            return Redirect::to('/social');
        }
        else
        {
            Session::put('message','Email or Password is Invalid!');
            return Redirect::to('/social/login');
        }
    }

    public function logout(){
        Session::put('user_id',null);
        Session::put('user_name',null);
        Session::put('user_type',null);
        Session::flush();
        return Redirect::to('/social/login');
    }

    public function index(){
        $userId = Session::get('user_id');
        if (!isset($userId)){
            return Redirect::to('/social/login');
        }

        $comment = DB::table('comment')
            ->join('posts','comment.post_idpost','=','posts.idpost')
            ->join('users','comment.user_iduser','=','users.iduser')
            ->get();
        $like = DB::table('reaction')
            ->get();
        $chatlists = DB::table('users')
            ->where('iduser','!=',$userId)
            ->get();
        $Id = Session::get('user_id');
        $image = DB::table('users')->where('iduser',$Id)->first();
        $user = DB::table('users')->where('iduser',$userId)->first();
        $posts = DB::table('posts')
            ->orderBy('idpost','desc')
           ->join('users','posts.user_iduser','=','users.iduser')
            ->select('posts.*','users.name','users.iduser as userid','users.image as poster' )
            ->get();
        return view('alumniSocial.home')->with('image',$image)->with('posts',$posts)->with('user',$user)->with('comment',$comment)->with('chatlists',$chatlists)->with('likes',$like);
    }

    public function profile($userId){
        $posts = DB::table('posts')
            ->orderBy('idpost','desc')
            ->join('users','posts.user_iduser','=','users.iduser')
            ->select('posts.*','users.name','users.iduser as userid','users.image as poster' )
            ->where('user_iduser',$userId)
            ->get();
        $comment = DB::table('comment')
            ->join('posts','comment.post_idpost','=','posts.idpost')
            ->join('users','comment.user_iduser','=','users.iduser')
            ->get();
        $like = DB::table('reaction')
            ->get();
        $Id = Session::get('user_id');
        $chatlists = DB::table('users')
            ->where('iduser','!=',$Id)
            ->get();
        $image = DB::table('users')->where('iduser',$Id)->first();
        $user = DB::table('users')->where('iduser',$userId)->first();
        return view('alumniSocial.profile')->with('image',$image)->with('posts',$posts)->with('user',$user)->with('comment',$comment)->with('chatlists',$chatlists)->with('likes',$like);
    }

    public function post(Request $request){
        $data = array();
        $data['body'] = $request->input('body');
        $data['user_iduser'] = Session::get('user_id');
        $data['created_at'] =  date("Y-m-d h:i:s");
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = substr(md5(time()),'1','8');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = "alumniSocial/images/";
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if ($success){
                $data['image'] = $image_url;
                DB::table('posts')->insert($data);
                return Redirect::to('/social');
            }
        }
        else{
            $data['image'] = '';
            DB::table('posts')->insert($data);
            Session::put('message','Product Updated Successfully');
            return Redirect::to('/social');
        }
    }

    public function photos($id){
        $photos = DB::table('posts')
            ->select('image')
            ->where('image','!=','')
            ->where('user_iduser',$id)
            ->get();
        $userId = Session::get('user_id');
        $Id = Session::get('user_id');
        $chatlists = DB::table('users')
            ->where('iduser','!=',$Id)
            ->get();
        $Id = Session::get('user_id');
        $image = DB::table('users')->where('iduser',$Id)->first();
        $user = DB::table('users')->where('iduser',$userId)->first();
        return view('alumniSocial.photos')->with('image',$image)->with('photos',$photos)->with('user',$user)->with('chatlists',$chatlists);
    }

    public function about($id){
        $Id = Session::get('user_id');
        $chatlists = DB::table('users')
            ->where('iduser','!=',$Id)
            ->get();
        $user = DB::table('users')->where('iduser',$id)->first();
        $Id = Session::get('user_id');
        $image = DB::table('users')->where('iduser',$Id)->first();
        return view('alumniSocial.about')->with('image',$image)->with('user',$user)->with('chatlists',$chatlists);
    }

    public function edit($id){
        $users = DB::table('users')
            ->where('unique_id',$id)
            ->first();
        $Id = Session::get('user_id');
        $chatlists = DB::table('users')
            ->where('iduser','!=',$Id)
            ->get();
        $user = DB::table('users')->where('iduser',$id)->first();
        $Id = Session::get('user_id');
        $image = DB::table('users')->where('iduser',$Id)->first();
        return view('alumniSocial.edit')->with('image',$image)->with('users',$users)->with('user',$user)->with('chatlists',$chatlists);
    }

    public function update(Request $request,$id){
        $type = Session::get('user_type');
        $data = array();
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
        $data['type'] = $type;
        $data['address'] = $request->input('address');
        $data['about'] = $request->input('about');

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $data['image'] = $request->input('image');
            $image_name = substr(md5(time()),'1','8');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = "alumniSocial/images/";
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path,$image_full_name);
            $data['image'] = $image_url;
        }
        else{
            $data['image'] = $request->input('image');
        }

        if ($request->hasFile('cover_image')){
            $image = $request->file('cover_image');
            $data['cover_image'] = $request->input('cover_image');
            $image_name = substr(md5(uniqid()),'1','8');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = "alumniSocial/images/";
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path,$image_full_name);
            $data['cover_image'] = $image_url;
        }
        else{
            $data['cover_image'] = $request->input('cover_image');
        }

        $users = DB::table('users')
            ->where('iduser',$id)
            ->update($data);
        return Redirect::to('/social');
    }

    public function comment(Request $request, $id){
        $data = array();
        $data['comment'] = $request->input('comment');
        $data['user_iduser'] = Session::get('user_id');
        $data['post_idpost'] =  $id;
        $data['created_at'] =  date("Y-m-d h:i:s");
        DB::table('comment')->insert($data);
        return Redirect::to('/social');
    }

    public function like($id){
        $data = array();
        $userid = Session::get('user_id');
        $data['number'] = 1;
        $data['user_iduser'] = $userid;
        $data['post_idpost'] =  $id;
        $data['created_at'] =  date("Y-m-d h:i:s");

        $find_user = DB::table('reaction')
            ->where('user_iduser','=',$userid)
            ->where('post_idpost','=',$id)
            ->count();
        if ($find_user==1){
            return Redirect::to('/social');
        }
        else{
            DB::table('reaction')->insert($data);
            return Redirect::to('/social');
        }
    }

    public function friends(){
        $id = Session::get('user_id');
        $friends = DB::table('users')
            ->where('iduser','!=',$id)
            ->get();
        $user = DB::table('users')->where('iduser',$id)->first();
        $Id = Session::get('user_id');
        $chatlists = DB::table('users')
            ->where('iduser','!=',$Id)
            ->get();
        $Id = Session::get('user_id');
        $image = DB::table('users')->where('iduser',$Id)->first();
        return view('alumniSocial.friends')->with('image',$image)->with('friends',$friends)->with('user',$user)->with('chatlists',$chatlists);
    }

    public function search(Request $request){
        $data = $request->input('search');
        $id = Session::get('user_id');
        $user = DB::table('users')->where('iduser',$id)->first();
        $Id = Session::get('user_id');
        $chatlists = DB::table('users')
            ->where('iduser','!=',$Id)
            ->get();
        $searchs = DB::table('users')
            ->join('alumni','users.alumni_idalumni','=','alumni.idalumni')
//            ->join('admin','users.admin_idadmin','=','admin.idadmin')
////            ->join('admin','users.admin_idadmin','=','admin.idadmin')
//            ->select('users.*','admin.executive_designation','alumni.alumni_department')
            ->where('name','LIKE','%'.$data.'%')
            ->orWhere('email','LIKE','%'.$data.'%')
            ->orWhere('phone','LIKE','%'.$data.'%')
            ->orWhere('alumni_department','LIKE','%'.$data.'%')
            ->orWhere('graduate_year','LIKE','%'.$data.'%')
            ->get();
        $Id = Session::get('user_id');
        $image = DB::table('users')->where('iduser',$Id)->first();
        return view('alumniSocial.search')->with('image',$image)->with('searchs',$searchs)->with('user',$user)->with('chatlists',$chatlists);
    }

    public function search_profile($id){
        $posts = DB::table('posts')
            ->orderBy('idpost','desc')
            ->join('users','posts.user_iduser','=','users.iduser')
            ->select('posts.*','users.name','users.iduser as userid','users.image as poster' )
            ->where('user_iduser',$id)
            ->get();
        $comment = DB::table('comment')
            ->join('posts','comment.post_idpost','=','posts.idpost')
            ->join('users','comment.user_iduser','=','users.iduser')
            ->get();
        $Id = Session::get('user_id');
        $chatlists = DB::table('users')
            ->where('iduser','!=',$Id)
            ->get();
        $Id = Session::get('user_id');
        $image = DB::table('users')->where('iduser',$Id)->first();
        $user = DB::table('users')->where('iduser',$id)->first();
        return view('alumniSocial.search_profile')->with('image',$image)->with('posts',$posts)->with('user',$user)->with('comment',$comment)->with('chatlists',$chatlists);
    }

    public function message($chat_id){
        $chat_name = DB::table('users')->where('iduser',$chat_id)->first();
        $Id = Session::get('user_id');
        $me = DB::table('chatting')
            ->where('to_user_id',$chat_id)
            ->where('from_user_id',$Id)
            ->orWhere('from_user_id',$chat_id)
            ->where('to_user_id',$Id)
            ->get();
        $image = DB::table('users')->where('iduser',$Id)->first();
        $image1 = DB::table('users')->where('iduser',$chat_id)->first();
        $user = DB::table('users')->where('iduser',$Id)->first();
        $chatlists = DB::table('users')
            ->where('iduser','!=',$Id)
            ->get();
        return view('alumniSocial.message')->with('me',$me)->with('chat_name',$chat_name)->with('image',$image)->with('image1',$image1)->with('user',$user)->with('chatlists',$chatlists)->with('chatid',$chat_id);
    }

    public function messageStore(Request $request,$receiver_id){
        $data = array();
        $from = Session::get('user_id');
        $to = $receiver_id;
        $message = $request->input('message');
        $data['message'] = $message;
        $data['from_user_id'] = $from;
        $data['to_user_id'] = $to;
        $store = DB::table('chatting')->insert($data);
        return Redirect::to('social/message/'.$to);
    }
}
