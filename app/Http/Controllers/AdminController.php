<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function login(){
        $admin_id = Session::get('admin_id');
        if (isset($admin_id)){
            return Redirect::to('/admin');
        }
        return view('alumniAdmin.login');
    }

    public function loginCheck(Request $request){
        $admin_email = $request->input('name');
        $admin_password = $request->input('password');
        $type = 'admin';
        $result = DB::table('users')
            ->where('email',$admin_email)
            ->where('password',$admin_password)
            ->where('type',$type)
            ->first();

        if ($result){
            Session::put('admin_id',$result->iduser);
            Session::put('admin_name',$result->name);
            return Redirect::to('/admin');
        }
        else
        {
            Session::put('message','Email or Password is Invalid!');
            return Redirect::to('/admin-login');
        }
    }

    public function logout(){
        Session::put('admin_id',null);
        Session::put('admin_name',null);
        Session::flush();
        return Redirect::to('/admin-login');
    }



    public function index(){
//        $admin_id = Session::get('admin_id');
//        if (!isset($admin_id)){
//            return Redirect::to('/admin-login');
//        }
        return view('alumniAdmin.home');
    }

    public function alumniRegistration(){
        return view('alumniAdmin.registration');
    }

    public function executiveRegistration(){
        return view('alumniAdmin.executive-registration');
    }

    public function alumniStore(Request $request){
        $data1 = array();
        $data = array();
        $data1['alumni_department'] = $request->input('alumni_department');
        $data1['graduate_year'] = $request->input('graduate_year');

        $data['password'] = $request->input('alumni_id');
        $data['name'] = $request->input('alumni_name');
        $data['phone'] = $request->input('alumni_phone');
        $data['email'] = $request->input('alumni_email');
        $data['type'] = 'alumni';
        $data['image'] = '';
        $data['address'] = '';
        $data['about'] = '';
        $data['cover_image'] = '';
        $data['unique_id'] = substr(md5(time()),'1','10');

        $alumniId = DB::table('alumni')->insertGetId($data1);

        $data['alumni_idalumni'] = $alumniId;
        if ($alumniId){
            DB::table('users')->insert($data);
            Session::put('message','Alumni Member Registered Successfully');
            return Redirect::to('/admin/alumni-register');
        }
    }

    public function executiveStore(Request $request){
        $data1 = array();
        $data = array();
        $data1['executive_designation'] = $request->input('executive_designation');

        $data['password'] = $request->input('executive_id');
        $data['name'] = $request->input('executive_name');
        $data['phone'] = $request->input('executive_phone');
        $data['email'] = $request->input('executive_email');
        $data['type'] = 'admin';
        $data['image'] = '';
        $data['cover_image'] = '';
        $data['address'] = '';
        $data['about'] = '';
        $data['unique_id'] = substr(md5(time()),'1','10');
        $adminId = DB::table('admin')->insertGetId($data1);
        $data['admin_idadmin'] = $adminId;
        if ($adminId){
            DB::table('users')->insert($data);
            Session::put('message','Executive Member Registered Successfully');
            return Redirect::to('/admin/executive-register');
        }
    }



    public function program(){
        return view('alumniAdmin.programs');
    }

    public function programStore(Request $request){
        $data = array();
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['date'] = $request->input('date');
        $data['vacciences'] = $request->input('vacciences');
        $data['address'] = $request->input('address');
        $data['user_iduser'] = 1;
        $image = $request->file('image');
        if ($image){
            $image_name = substr(md5(time()),'1','8');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = "alumniAdmin/img/";
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if ($success){
                $data['image'] = $image_url;
                DB::table('program_event')->insert($data);
                Session::put('message','Programs Added Successfully');
                return Redirect::to('/admin/programs');
            }
        }
    }

    public function program_list(){
        $program_lists = DB::table('program_event')
            ->orderBy('idprogram_events','desc')
            ->get();
        return view('alumniAdmin.manageEvent')->with('lists',$program_lists);
    }

    public function enroll_list($id){
        $program_lists = DB::table('participate')
            ->join('users','participate.user_iduser','=','users.iduser')
            ->where('program_event_idprogram_events',$id)
            ->get();
//        echo "<pre>";
//        print_r($program_lists);
//        die();
        return view('alumniAdmin.enroll')->with('lists',$program_lists);
    }

    public function jobPost(){
        return view('alumniAdmin.job_posting');
    }

    public function jobStore(Request $request){
        $data = array();
        $data['title'] = $request->input('title');
        $data['company_name'] = $request->input('company_name');
        $data['location'] = $request->input('location');
        $data['deadline'] = $request->input('deadline');
        $data['description'] = $request->input('description');
        $data['user_iduser'] = 1;

        DB::table('jobPosting')->insert($data);
        Session::put('message','Job Posted Successfully');
        return Redirect::to('/admin/job-post');
    }

    public function slider(){
        return view('/alumniAdmin.slider');
    }

    public function sliderStore(Request $request){
        $data = array();
        $data['title1'] = $request->input('title1');
        $data['title2'] = $request->input('title2');
        $data['title3'] = $request->input('title3');

        echo $image = $request->file('image');

            $image_name = $image;
            echo $image_full_name = $image_name;
            $upload_path = "alumniAdmin/img/";
            echo $image_url = $upload_path.$image_full_name;
//            $success = $image->move($upload_path,$image_full_name);

    }

    public function story(){
        return view('/alumniAdmin.story');
    }

    public function storyStore(Request $request){
        $data = array();
        $data['name'] = $request->input('name');
        $data['story'] = $request->input('story');
        $data['created_at'] =  date("Y-m-d h:i:s");
        $image = $request->file('image');
        if ($image){
            $image_name = substr(md5(time()),'1','8');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = "alumniAdmin/img/";
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if ($success){
                $data['image'] = $image_url;
                DB::table('alumnistory')->insert($data);
                Session::put('message','Story Added Successfully');
                return Redirect::to('/admin/story');
            }
        }

    }
}
