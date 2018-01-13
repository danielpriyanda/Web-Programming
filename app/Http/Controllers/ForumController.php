<?php

namespace App\Http\Controllers;

use App\Enroll;
use App\Forum;
use App\Lecture;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
class ForumController extends Controller
{
    public function getAllForum()
    {
        $enroll = Enroll::where('user_id',Auth::user()->id)->get();
        $forums = Forum::where('user_id',Auth::user()->id)->get();
        return view('forum.show',compact('forums'));
    }

    public function getAddForum($id)
    {
        $forum = Forum::where('enroll_id',$id)->get();
        return view('forum.add');
    }

    public function getDiscuss($id)
    {
        
    }
}
