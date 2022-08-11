<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    //This directs you to the loging page if one haven't logged in
    //Evry route here is procted by the auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($user){
        // dd(User::find($user));
        $user = User::findOrFail($user);
        return view('profile', [
            "profile" => $user,
        ]);
    }
}
