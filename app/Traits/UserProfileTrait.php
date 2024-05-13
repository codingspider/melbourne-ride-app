<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

trait UserProfileTrait {

    public function userProfileDataUpdate($user, $request){
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);
        
        if ($request->hasFile('photo')) {
            $old = $user->photo;
            $photo = fileUploader($request->photo, getFilePath('userphoto'), getFileSize('userphoto'), $old);
            $user->photo = $photo;
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();
        return $user;
    }
    
}