<?php

namespace App\Http\Controllers;

use App\Enroll;
use App\Lecture;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class PagesController extends Controller
{
    public function getStudentLogin()
    {
    	return view('pages.student.login');
    }

    public function getDosenLogin()
    {
    	return view('pages.dosen.login');
    }

    public function getStudentRegister()
    {
    	return view('pages.student.register');
    }

    public function postStudentLogin(Request $req)
    {
    	$validate = Validator::make($req->all(),[
    			'nim' => 'required',
    			'password' => 'required',
    		]);

    	if($validate->fails())
    	{
    		return redirect()->back()->withErrors($validate);
    	}
    	else{
    		
    		$account = ['nim' => $req->get('nim'),'password' => $req->get('password')];
    		
    		if(Auth::guard('web')->attempt($account))
    		{
    			return redirect('/lecture/all');
    		}

    		else{
    			return redirect()->back()->with('fail','NIM or Password is invalid');
    		}
    	}
    }

    public function getStudentLogout()
    {
    	Auth::logout();
    	return redirect()->back()->with('status','Your Account has been Logout');
    }

    public function getAllLecture()
    {
        $lectures = Lecture::paginate(8);
        return view('lecture.show',compact('lectures'));
    }

    public function getLectureImage($filename)
    {
        $image = Storage::disk('lecture')->get($filename);
        return response($image,200)->header('Content-Type','Image/JPEG');
    }
}
