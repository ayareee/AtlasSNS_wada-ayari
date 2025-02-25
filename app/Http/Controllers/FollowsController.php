<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    //
    public function followList(){
        return view('follows.followList');
    }

public function show(User $user){
    $login_user= auth()-user();

}



    public function followerList(){
        return view('follows.followerList');
    }
}
