<?php

namespace App\Traits;

use App\Models\User;
use App\Models\Driver;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

trait UserTrait {
    
    public function userProfileDataStore($request, $user_type=null, $is_admin=null, $is_approve=null){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withError($validator->errors());
        } 

        $inputs = [];
        $inputs['first_name'] = $request->first_name;
        $inputs['last_name'] = $request->last_name;
        $inputs['password'] = Hash::make($request->password);
        $inputs['email'] = $request->email;
        $inputs['is_admin'] = 2; // 2 for customer
        $user = User::create($inputs);
        return $user;
    }

}