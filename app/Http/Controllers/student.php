<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Attend;
use App\Models\Exercise;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class student extends Controller
{
    public function __construct()
    {
        session()->forget('active');
        $this->middleware(['auth','VerifiedUser']);
    }

    public function attend()
    {
        switch (Auth::user()->gender) {
            case 'm':
                session()->flash('image', 'images/male-face.png');
                break;
            case 'f':
                session()->flash('image', 'images/female-face.png');
                break;
        }
        session()->forget('active');
        $attends = Attend::where('std_id', Auth::user()->id)->select('attendence.attend_record', 'attendence.date', 'attendence.attendence', 'attendence.payed', 'attendence.reset')->join('branches', 'branches.id', '=', 'attendence.branch_id')->selectRaw('branches.name')->get();
        return view('attend')->with('attends', $attends);
    }
    public function exm()
    {
        switch (Auth::user()->gender) {
            case 'm':
                session()->flash('image', 'images/male-face.png');
                break;
            case 'f':
                session()->flash('image', 'female-face.png');
                break;
        }
        session()->forget('active');
        $exams = Exam::where('std_id', Auth::user()->id)->select('exams.date', 'exams.degree', 'exams.payed')->join('branches', 'branches.id', '=', 'exams.branch_id')->selectRaw('branches.name')->join('exam_records', 'exam_records.id', '=', 'exams.exam_record')->selectRaw('exam_records.maximum')->get();
        return view('exam')->with('exams', $exams);
    }
    public function exc()
    {
        switch (Auth::user()->gender) {
            case 'm':
                session()->flash('image', 'images/male-face.png');
                break;
            case 'f':
                session()->flash('image', 'female-face.png');
                break;
        }
        session()->forget('active');
        $exercises = Exercise::where('std_id', Auth::user()->id)->select('exercises.date', 'exercises.degree')->join('branches', 'branches.id', '=', 'exercises.branch_id')->selectRaw('branches.name')->join('exercise_records', 'exercise_records.id', '=', 'exercises.Exercise_Record')->selectRaw('exercise_records.maximum')->get();
        return view('exercises')->with('exercises', $exercises);
    }
    public function hw()
    {
        switch (Auth::user()->gender) {
            case 'm':
                session()->flash('image', 'images/male-face.png');
                break;
            case 'f':
                session()->flash('image', 'images/female-face.png');
                break;
        }
        session()->forget('active');
        $hws = Attend::where('std_id', Auth::user()->id)->select('attendence.date', 'attendence.hw')->join('branches', 'branches.id', '=', 'attendence.branch_id')->selectRaw('branches.name')->get();
        return view('hw')->with('hws', $hws);
    }
    public function profile()
    {
        switch (Auth::user()->gender) {
            case 'm':
                session()->flash('image', 'images/male-face.png');
                break;
            case 'f':
                session()->flash('image', 'images/female-face.png');
                break;
        }
        session()->forget('active');
        $lectures = Attend::where('std_id', Auth()->user()->id)->count();
        $lectures_attend = Attend::where('std_id', Auth()->user()->id)->where('attendence', '1')->count();
        $exams = Exam::where('std_id', Auth()->user()->id)->count();
        $homework = Attend::where('std_id', Auth()->user()->id)->where('hw', '1')->count();
        return view('profile')->with('lectures', $lectures)->with('lectures_attend', $lectures_attend)
            ->with('exams', $exams)->with('homework', $homework);
    }
}
