<?php

namespace App\Http\Controllers\API\Driver;

use App\Models\User;
use App\Models\Driver;
use App\Constants\Status;
use App\Models\TaxiBooking;
use App\Traits\DriverTrait;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Traits\UserProfileTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    use DriverTrait;
    use UserProfileTrait;


    /**
     * @method
     * Driver user profile
     *
     * This endpoint is used to get all Driver user profile.
     * 
     * @authenticated
     *
     * @response scenario="Request Successfull" {
     *       "status": true,
     *       "message": "Data retrive successfully",
     *       "data": {
     *           "id": 3,
     *           "name": "Sven69",
     *           "email": "fakedata90875@gmail.com",
     *           "phone": "78987",
     *           "address": "8786 Altenwerth Trace",
     *           "profile_photo": null,
     *           "nid_number": null,
     *           "passport_number": null,
     *           "passport_photo": null,
     *           "user_id": 16,
     *           "status": 1,
     *           "created_at": "2023-12-03T09:55:00.000000Z",
     *           "updated_at": "2023-12-03T09:55:00.000000Z"
     *       }
     *   }
     *
     */
    
    public function userProfile(Request $request){
        try {
            $user = Driver::where('user_id', auth()->user()->id)->first();
            return ApiResponse::success($user, 'Data retrive successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }
  

}