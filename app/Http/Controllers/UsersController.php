<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
    public function search(Request $request){
        $user =Auth::user();

        $keyword = $request->input('keyword');

        if (!empty($keyword))
        {
            $users = User::where('username', 'LIKE', "%{$keyword}%");

        } else
        {
            $users =User::all();
        }
        return view('users.search')->with(['user'=>$user, 'users' => $users,]);

    }
}
