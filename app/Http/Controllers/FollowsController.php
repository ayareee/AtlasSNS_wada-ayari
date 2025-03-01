<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follow;

class FollowsController extends Controller
{
    //
    public function followList(){
        return view('follows.followList');
    }

    public function show(User $user){
    $login_user= auth()-user();
    $is_following=$login_user->isFollowing($user->id);
    $is_followed=$login_user->isFollowed($user->id);
    $follow_count=$login_user->getFollowCount($user->id);
    $follower_count=$login_user->getFollowerCount($user->id);

    return view('user.show',[
        'user'=>$user,
        'is_following'=>$is_following,
        'is_followed'=>$is_followed,
        'follow_count'=>$follow_count,
        'follower_count'=>$follower_count
    ]);
}

public function follows(){
    return $this->belongsToMany(User::class,'follows','following_id','followed_id');
}

public function followers(){
        return $this->belongsToMany(User::class,'follows','followed_id','following_id');
}

public function followerList(){
        return view('follows.followerList');
    }
}
