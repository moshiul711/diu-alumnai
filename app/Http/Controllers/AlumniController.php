<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AlumniController extends Controller
{
    public function index(){
        $event = DB::table('program_event')
            ->orderBy('idprogram_events','desc')
            ->first();

        $story = DB::table('alumnistory')
            ->orderBy('idalumnistory','desc')
            ->first();

        $events = DB::table('program_event')
            ->get();

        $jobs = DB::table('jobposting')
            ->get();
        return view('front.home')->with('event',$event)->with('events',$events)->with('jobs',$jobs)->with('story',$story);
//        echo '<pre>';
//        print_r($events);
    }

    public function about(){
        return view('front.about');
    }

    public function eventDetails($id){
        $event = DB::table('program_event')
            ->where('idprogram_events','=',$id)
            ->first();
        return view('front.eventDetails')->with('event',$event);
    }
    public function programsEvents(){
        $event = DB::table('program_event')
            ->orderBy('idprogram_events','desc')
            ->first();
        $events = DB::table('program_event')
            ->get();
        return view('front.programs-events')->with('event',$event)->with('events',$events);
    }

    public function story(){
        $stories = DB::table('alumnistory')->get();
        return view('front.story')->with('stories',$stories);
    }
    public function career(){
        $jobs = DB::table('jobposting')->paginate(5);
        return view('front.career')->with('jobs',$jobs);
    }

    public function jobDetails($id){
        $job = DB::table('jobposting')
            ->where('idjob_posting','=',$id)
            ->first();
        return view('front.jobDetails')->with('job',$job);
    }

    public function members(){
        $members = DB::table('users')
            ->join('alumni','users.alumni_idalumni','=','alumni.idalumni')
            ->get();
        return view('front.members')->with('members',$members);
    }

    public function register(){
        return view('front.register');
    }

    public function memberStore(Request $request){
        $data1 = array();
        $data = array();
        echo $data1['alumni_department'] = $request->input('alumni_department');
        echo $data1['graduate_year'] = $request->input('graduate_year');

        echo $data['password'] = $request->input('alumni_id');
        echo $data['name'] = $request->input('alumni_name');
        echo $data['phone'] = $request->input('alumni_phone');
        echo $data['email'] = $request->input('alumni_email');
        echo $data['type'] = 'alumni';
        echo $data['image'] = '';
        echo $data['address'] = '';
        echo $data['about'] = '';
        echo $data['cover_image'] = '';

        echo $alumniId = DB::table('alumni')->insertGetId($data1);

        $data['alumni_idalumni'] = $alumniId;
        if ($alumniId){
            DB::table('users')->insert($data);
            Session::put('message','You have been Registered Successfully');
            return Redirect::to('/register');
        }
    }

    public function login(){
        return view('front.login');
    }

    public function login_check(Request $request){
        echo $admin_email = $request->input('email');
        echo $admin_password = $request->input('password');
        $result = DB::table('users')
            ->where('email',$admin_email)
            ->where('password',$admin_password)
            ->first();

        if ($result){
            Session::put('user_id',$result->iduser);
            Session::put('user_name',$result->name);
            return Redirect::to('/');
        }
        else
        {
            Session::put('message','Email or Password is Invalid!');
            return Redirect::to('/login');
        }
    }

    public function logout(){
        Session::put('user_id',null);
        Session::put('user_name',null);
        Session::flush();
        return Redirect::to('/');
    }

    public function eventRegister($event_id){
        $event = DB::table('program_event')
            ->where('idprogram_events',$event_id)
            ->first();
        $user_id = Session::get('user_id');
        if (!isset($user_id)){
            Session::put('message','You have to Login First');
            return Redirect::to('/programs-events');
        }
        $data = array();
        $data['user_iduser'] = $user_id;
        $data['program_event_idprogram_events'] = $event_id;
        $enroll = DB::table('participate')->insert($data);

        if ($enroll){
            $seat = $event->vacciences;
            if ($seat<=0){
                Session::put('message','Sorry! Seat is not available');
                return Redirect::to('/programs-events');
            }
            $update_seat = $seat - 1;
            $data = array();
            $data['title'] = $event->title;
            $data['description'] = $event->description;
            $data['date'] = $event->date;
            $data['vacciences'] = $update_seat;
            $data['address'] = $event->address;
            $data['image'] = $event->image;
            $data['date'] = $event->date;
            $data['user_iduser'] = $user_id;

            DB::table('program_event')
                ->where('idprogram_events',$event_id)
                ->update($data);
            Session::put('message','Successfully Enrolled to the Events');
            return Redirect::to('/programs-events');
        }
    }

}
