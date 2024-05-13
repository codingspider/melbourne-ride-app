<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Constants\Status;
use App\Traits\UserTrait;
use App\Traits\DriverTrait;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Traits\CustomerTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use CustomerTrait;
    use DriverTrait;
    use UserTrait;
    
    /**
     * @method
     * User Registration
     * 
     * @bodyParam user_type integer required Example: 2
     * @bodyParam name string required Example: Abdul Lotif
     * @bodyParam phone string required Example: +88 01234567890
     * @bodyParam address string required Example: Dhaka, Bangladesh.
     * @bodyParam email string required Example: lotif@mail.com
     * @bodyParam username string required Example: lotif
     * @bodyParam password string required Example: 12345678
     * @bodyParam confirm-password string required Example: 12345678
     * 
     * @response scenario="Successfull Registration" {
     * "status": true,
     * "message": "Registration successfully",
     * "data": {
     *   "name": "Abdul",
     *   "username": "lotif",
     *   "email": "lotif@mail.com",
     *   "user_type": 2,
     *   "is_admin": 2,
     *   "approved": 1,
     *   "updated_at": "2023-12-02T05:05:55.000000Z",
     *   "created_at": "2023-12-02T05:05:55.000000Z",
     *   "id": 1,
     *   "token": "1|b4QdpNgFD7g6hSBTa4MoHBLXtjrKKtOW98Lev2d25754cfa6"
     *  }
     * }
     * 
     * @response 417 scenario="Registration Failed"{
     * "status": false,
     * "message": "Error Occurred."
     * }
     * 
     */
    public function registerUser(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'user_type' => 'required|integer',
            'name' => 'required|string',
            'phone' => 'required',
            'address' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|same:confirm-password',
        ]);

        if ($validator->fails()) {
            return ApiResponse::error($validator->errors(), Status::VALIDATION_ERROR);
        }
        
        DB::beginTransaction();
        try {
            if($request->user_type == 2){
                $user = $this->userProfileDataStore($request, 2, 2, 1);
                $customer = $this->customerProfileUpdateOrStore($user, $request);
                $user->token = $user->createToken('token-name')->plainTextToken;
            }else{
                $user = $this->userProfileDataStore($request, 1, 1, 1);
                $driver = $this->driverProfileUpdateOrStore($user, $request);
                $user->token = $user->createToken('token-name')->plainTextToken;
            }
            
            DB::commit();

            return ApiResponse::success($user, 'Registration successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            DB::rollback();
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }

    /**
     * @method
     * Login
     *
     * This endpoint is used to login a user to the system.
     *
     * @bodyParam email string required Example: johndeo
     * @bodyParam password string required Example: 12345678
     *
     * @response scenario="Successful Login" {
     *       "status": true,
     *       "message": "Login successfully",
     *      "data": {
     *           "id": 16,
     *           "name": "Abdul",
     *           "email": "lotif@mail.com",
     *           "email_verified_at": null,
     *           "is_admin": 2,
     *           "approved": 1,
     *           "photo": null,
     *           "twitter": null,
     *           "facebook": null,
     *           "instagram": null,
     *           "linkedin": null,
     *           "created_at": "2023-12-02T05:05:55.000000Z",
     *           "updated_at": "2023-12-02T05:05:55.000000Z",
     *           "username": "lotif",
     *           "user_type": 2,
     *           "token": "1|hjv1wlu6K1w16jt8yaUxG70srKeUXDsgwQ7ho2q349dbf1e3"
     *       }
     *   }
     *
     * @response 417 scenario="Failed Login"{
     * "status": false,
     * "message": "Invalid credentials."
     * }
     *
     */
    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::find(auth()->user()->id);
            $user->token = $user->createToken('token-name')->plainTextToken;

            return ApiResponse::success($user, 'Login successfully', Status::SUCCESS);
        }
        return ApiResponse::error('Invalid credentials.', Status::ERROR);
    }

    /**
     * @method
     * Logout
     *
     * This endpoint is used to logout a user from the system.
     *
     * @response scenario="Successful Login" {
     *       "status": true,
     *       "message": "Logout successfully",
     *      "data": null
     *   }
     *
     * @response 417 scenario="Failed Logout"{
     * "status": false,
     * "message": "Unauthenticated."
     * }
     *
     */
    public function logout(Request $request){
        $user = User::find(auth()->user()->id);
        // Revoke the user's token
        $user->tokens()->delete();
        return ApiResponse::success(null, 'Logout successfully', Status::SUCCESS);
    }

    /**
     * @method
     * Update Password
     *
     * This endpoint is used to update user password.
     *
     * @bodyParam password string required Example: 12345678
     * @bodyParam confirm-password string required Example: 12345678
     * @bodyParam old_password string required Example: 123456
     *
     * @response scenario="Successful Password Update" {
     *       "status": true,
     *       "message": "Password changed successfully",
     *      "data": null
     *   }
     *
     * @response 417 scenario="Failed Password Update"{
     * "status": false,
     * "message": "Incorrect old password."
     * }
     *
     */
    public function updatePassword(Request $request){

        $validator = Validator::make($request->all(), [
            'password' => 'required|same:confirm-password'
        ]);

        if ($validator->fails()) {
            return ApiResponse::error($validator->errors(), Status::VALIDATION_ERROR);
        }

        try {
            if(!Hash::check($request->old_password, auth()->user()->password)){
                return ApiResponse::error('Incorrect old password.', Status::ERROR);
            }

            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->password)
            ]);
            return ApiResponse::success($data=null, 'Password changed successfully', Status::SUCCESS);
        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }

}
