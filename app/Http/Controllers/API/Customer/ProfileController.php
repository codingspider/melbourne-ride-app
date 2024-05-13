<?php

namespace App\Http\Controllers\API\Customer;

use App\Models\Customer;
use App\Constants\Status;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    /**
     * @method
     * Customer User Profile Data
     *
     * This endpoint is used to get Customer User Profile Data
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
            $user = Customer::where('user_id', auth()->user()->id)->first();
            return ApiResponse::success($user, 'Data retrive successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }
}