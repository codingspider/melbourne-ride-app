<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Driver;
use App\Models\Customer;
use App\Constants\Status;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Traits\UserProfileTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProfileUpdateController extends Controller
{
    use UserProfileTrait;
    
    /**
     * @method
     * 
     * User Profile Update
     * 
     * @bodyParam name string required Example: John Doe
     * @bodyParam email string required Example: lotif@mail.com
     * @bodyParam phone string required Example: +88 01234567890
     * @bodyParam address string required Example: Dhaka, Bangladesh.
     * @bodyParam email string required Example: lotif@mail.com
     * @bodyParam license_number string optional Only for driver Example: 35342534
     * @bodyParam nid_number string optional Example: 35342534
     * @bodyParam preferred_areas string optional Only for driver Example: 35342534
     * @bodyParam passport_number string optional Example: 35342534
     * @bodyParam passport_photo file optional Example: 
     * @bodyParam twitter string optional Example: https://example.com
     * @bodyParam facebook string optional Example: https://example.com
     * @bodyParam instagram string optional Example: https://example.com
     * @bodyParam linkedin string optional Example: https://example.com
     * @bodyParam license_photo file optional Only for driver. Example: 
     * @bodyParam nid_photo file optional Example: 
     * @bodyParam documents file optional Only for driver. Example: 
     * @bodyParam photo file optional Only for driver. Example: 
     * 
     * @response scenario="Request Successfull" {
     *       "status": true,
     *       "message": "Profile updated successfully",
     *       "data": {
     *           "id": 16,
     *           "name": "Abdul Hamid Khan Vashani",
     *           "email": "vahsani@gmail.com",
     *           "email_verified_at": null,
     *           "is_admin": 2,
     *           "approved": 1,
     *           "photo": null,
     *           "twitter": "optional",
     *           "facebook": "optional",
     *           "instagram": "optional",
     *           "linkedin": "optional",
     *           "created_at": "2023-12-02T05:05:55.000000Z",
     *           "updated_at": "2023-12-03T06:35:55.000000Z",
     *           "username": "lotif",
     *           "user_type": 2
     *       }
     *   }
     * 
     * @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error Occurred."
     * }
     * 
     */
    public function updateUserInformation(Request $request){
        $user = User::find(Auth::user()->id);
        $validator = Validator::make($request->all(), [
            'email' => [
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);
        
        if ($validator->fails()) {
            return ApiResponse::error($validator->errors(), Status::VALIDATION_ERROR);
        }

        DB::beginTransaction();

        try {
            $inputs = $request->except('photo');
            $this->userProfileDataUpdate($user, $request);

            if($user->user_type == 2){
                $customer = Customer::where('user_id', $user->id)->first();
                $this->customerProfileUpdate($customer, $request);
            }elseif($user->user_type == 1){
                $driver = Driver::where('user_id', $user->id)->first();
                $this->driverProfileUpdate($driver, $request);
            }

            DB::commit();
            return ApiResponse::success($user, 'Profile updated successfully', Status::SUCCESS);
        } catch (\Exception $e) {
            DB::rollback();
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }

}
