<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class GuestController extends Controller
{
    public function showCourse($id) {
        return view('showCourse', ['course' => Course::find($id)]);
    }
}
