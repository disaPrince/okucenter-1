<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Topic;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function usersList() {
        return view('users.list', ['users' => User::all()]);
    }

    public function userCreateView() {
        return view('users.createView', ['roles' => Role::all()]);
    }

    public function userCreate(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->roleId;
        $user->save();
        
        return redirect()->route('users.list');
    }

    public function userControl($id) {
        $user = User::find($id);
        $courseArray = [];
        $userCatalogCourse = $user->course;
        foreach($userCatalogCourse as $course){
            $courseArray[] = intval($course->pivot->course_id);
        }
        return view('users.userControl', ['user' => $user, 'roles' => Role::all(),'courses' => Course::all(), 'courseArray' => $courseArray]);
    }

    public function userChangePass(Request $request)
    {
        $input = $request->all();
        $newPass = $this->quickRandom();
        $user = User::find($input['userId']);
        $user->password = Hash::make($newPass);
        $user->save();
        return ['newPass' => $newPass];
    }
    
    public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }

    public function userSave(Request $request) {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->roleId;
        $user->save();

        // Курсы
        if(isset($request->catalogCourseId)){
            if($user->course->count() == 0){
                foreach($request->catalogCourseId as $formCourse){
                    foreach(Course::all() as $course){
                        if($course->id == $formCourse){
                            $user->course()->attach($course);
                        }
                    }
                }
            }else{
                $user->course()->detach();
                foreach($request->catalogCourseId as $formCourse){
                    foreach(Course::all() as $course){
                            if($formCourse == $course->id){
                                $user->course()->attach($course);
                            }
                        }
                    }
                }
            }else {
                $user->course()->detach();
            }
        return redirect()->route('users.list');
    }

    public function userDelete($id) {
        User::find($id)->delete();
        return redirect()->route('users.list');
    }

    public function userCourse($id, $topicId) {
        $course = 0;
            foreach(Auth::user()->course as $course){
                if($course->pivot->course_id == $id){
                    $course = $id;
                }
            }
        if(empty($course)){
            return abort(404);
        }else{
            $count = Topic::where('course_id', $id)->count();
            if(!$count){
                return abort(404);
            }
            if($topicId != 0){
                return view('users.course', ['menu' => Topic::where('course_id', $id)->select(array('id', 'name', 'course_id'))
                ->get(), 
                'topic' => Topic::find($topicId)
            ]);
            }
            return view('users.course', ['menu' => Topic::where('course_id', $id)->select(array('id', 'name', 'course_id'))->get(),
            'topic' => Topic::where('course_id', $id)->first()]);
        }
    }
}
