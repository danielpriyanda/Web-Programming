<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\Enroll;
use App\Lecture;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;

class EnrollController extends Controller
{
    public function postAddEnroll($id)
    {
        $lecture = Lecture::find($id);
        $enroll = Enroll::Where('lecture_id',$lecture->id)
            ->where('user_id',Auth::user()->id)->first();
        $totalDosen = Dosen::count();

        if(empty($enroll))
        {
            $dosenId = rand(1,$totalDosen);
            $kode = substr($lecture->lecture_name,0,3);
            $class_code = $kode.$dosenId;
            $newEnroll = new Enroll();
            $newEnroll->class_code = $class_code;
            $newEnroll->lecturer_id = $dosenId;
            $newEnroll->user_id = Auth::user()->id;
            $newEnroll->lecture_id = $lecture->id;
            $newEnroll->created_at = Carbon::now();
            $newEnroll->updated_at = Carbon::now();
            $newEnroll->save();
            Session::flash('success','Success Enroll new Lecture');
            return redirect()->to('/lecture/all');
        }
        Session::flash('status','Your Enroll already exists');
        return redirect()->to('/lecture/all');
    }

    public function getAllEnroll()
    {
        $enrolls = Enroll::where('user_id',Auth::user()->id)->get();
        return view('Enroll.show',compact('enrolls'));
    }
}
