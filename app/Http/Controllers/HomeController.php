<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function home() {
      return view('home', ['courses' => Course::all()]);
  }

  public function courseAddView() {
      return view('courses.courseAddView');
  }

  public function courseAdd(Request $request) {
      $course = new Course();
      $course->name = $request->name;
      $course->description = $request->description;
      $course->oldPrice = $request->oldPrice;
      $course->price = $request->price;
      if($request->hasFile('photo')){
        $file = $request->file('photo');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path().'/pictures/courses/', $fileName);
        $course->photo = '/pictures/courses/'.$fileName;
      }
      if($request->hasFile('video')){
        $file = $request->file('video');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path().'/video/courses/', $fileName);
        $course->video = '/video/courses/'.$fileName;
      }

      $course->save();

      return redirect()->route('home');
  }

  public function courseUpdateView($id) {
      return view('courses.courseUpdateView', ['CourseUpdate' => Course::find($id)]);
  }

  public function courseUpdate(Request $request, $id){
      $course = Course::find($id);
      $course->name = $request->name;
      $course->description = $request->description;
      $course->oldPrice = $request->oldPrice;
      $course->price = $request->price;

      if($request->hasFile('photo')){

        if(File::exists(public_path().$course->photo)) {
          File::delete(public_path().$course->photo);
        }

        $file = $request->file('photo');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path().'/pictures/courses/', $fileName);
        $course->photo = '/pictures/courses/'.$fileName;
      }

      if($request->hasFile('video')){

        if(File::exists(public_path().$course->video)) {
          File::delete(public_path().$course->video);
        }

        $file = $request->file('video');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path().'/video/courses/', $fileName);
        $course->video = '/video/courses/'.$fileName;
      }

      $course->save();

      return redirect()->route('home');
  }

  public function courseDelete($id) {
      $course = Course::find($id);

      foreach($course->topic as $topic){
          if(File::exists(public_path().$topic->homework)) {
            File::delete(public_path().$topic->homework);
          }

          if(File::exists(public_path().$topic->video)) {
            File::delete(public_path().$topic->video);
          }
      }

      if(File::exists(public_path().$course->photo)) {
        File::delete(public_path().$course->photo);
      }

      if(File::exists(public_path().$course->video)) {
        File::delete(public_path().$course->video);
      }

      $course->delete();
      return redirect()->route('home');
  }
}
