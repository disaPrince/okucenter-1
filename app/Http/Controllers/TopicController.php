<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TopicController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }
    
    public function topicList($id) {
        return view('topics.list',['course' => Course::find($id)]);
    }

    public function topicAddView($id) {
        return view('topics.topicAddView', ['courseId' => $id]);
    }

    public function topicAdd(Request $request, $id) {
        $topic = new Topic();
        $topic->name = $request->name;
        $topic->course_id = $id;

        if($request->hasFile('homework')){
            $randomString = Str::random(10);
            $file = $request->file('homework');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path().'/homeworks/',  $randomString.'_'.$fileName);
            $topic->homework = '/homeworks/'. $randomString.'_'.$fileName;
        }

        if($request->hasFile('video')){
            $randomString = Str::random(10);
            $file = $request->file('video');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path().'/video/topics/', $randomString.'_'.$fileName);
            $topic->video = '/video/topics/'.$randomString.'_'.$fileName;
        }

        $topic->save();

        return redirect()->route('topic.list', $id);
    }

    public function topicDelete($id, $courseId) {
        $topic = Topic::find($id);

        if(File::exists(public_path().$topic->homework)) {
            File::delete(public_path().$topic->homework);
        }

        if(File::exists(public_path().$topic->video)) {
            File::delete(public_path().$topic->video);
        }

        $topic->delete();

        return redirect()->route('topic.list', $courseId);
    }

    public function topicUpdateView($id, $courseId) {
        return view('topics.topicUpdateView', ['topic' => Topic::find($id), 'courseId' => $courseId ]);
    }

    public function topicUpdate(Request $request, $id, $courseId) {
        $topic = Topic::find($id);
        $topic->name = $request->name;

        if($request->hasFile('homework')){
            if(File::exists(public_path().$topic->homework)) {
                File::delete(public_path().$topic->homework);
            }
            $file = $request->file('homework');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path().'/homeworks/', $fileName);
            $topic->homework = '/homeworks/'.$fileName;
        }

        if($request->hasFile('video')){
            if(File::exists(public_path().$topic->video)) {
                File::delete(public_path().$topic->video);
            }
            $file = $request->file('video');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path().'/video/topics/', $fileName);
            $topic->video = '/video/topics/'.$fileName;
        }

        $topic->save();
        
        return redirect()->route('topic.list', $courseId);
    }
}
