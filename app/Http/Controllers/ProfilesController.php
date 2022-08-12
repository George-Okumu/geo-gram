<?php

namespace App\Http\Controllers;

use App\Models\User;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    //This directs you to the loging page if one haven't logged in
    //Evry route here is procted by the auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    // here we fetched user manually, check posts controller for a better way
    public function index($user){
        // dd(User::find($user));
        $user = User::findOrFail($user);
        return view('profile', [
            "profile" => $user,
        ]);
    }

    public function edit(User $user){
        return view('edit_profile', compact('user'));
    }

    public function update(User $user){
        $updatedData = request()->validate([
            "title"=>"",
            "description"=>"",
            "linkUrl"=>"url",
            "profileImage"=>"",
        ]);

        if(request('profileImage')){
            $imagePath = request('profileImage')->store("profile", "public");
            // $image = Image::make(public_path("storage/{{$imagePath}}"));
            // $imagePath->save();
        }

        // dd($updatedData);
        // dd(array_merge(
        //     //arrray_merge takes in any number of an array and appends them together
        //     $updatedData,
        //     ["profileImage"=>$imagePath], //this overides the first image value
        // ));

        // dd($user->profile);

       $user->profile->update(array_merge(
            $updatedData,
            ["profileImage"=>$imagePath],
        ));


        return redirect("profile/".auth()->user()->id);
        // dd($updatedData);
    }
}
