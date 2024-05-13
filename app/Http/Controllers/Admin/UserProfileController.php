<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Driver;
use App\Models\Customer;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Traits\UserProfileTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    use UserProfileTrait;
    
    public function userProfile (){
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin.profile.index', compact('user'));
    }

    public function updatePassword(Request $request){

        $this->validate($request, [
            'password' => 'required|same:confirm-password'
        ]);
        try {
            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }

            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->password)
            ]);
            return back()->with('success','Password updated successfully');
        } catch (\Exception $e) {
            return back()->with('error','Something went wrong');
        }
    }

    public function updateUserInformation(Request $request){
        $user = User::find($request->user_id);
        $validator = Validator::make($request->all(), [
            'email' => [
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {
            $inputs = $request->except('photo');
            $user = User::find($request->user_id);
            $this->userProfileDataUpdate($user, $request);
            DB::commit();
            return redirect()->back() ->withSuccess('Profile updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    
}
