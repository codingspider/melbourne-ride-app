<?php

namespace App\Http\Controllers\API;

use App\Constants\Status;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * @method
     * Service List
     *
     * This endpoint is used to get all service list.
     * 
     * @authenticated
     *
     * @response scenario="Request Successfull" {
     * "status": true,
     * "message": "Request Successfull",
     * "data": [
     *      {
     *          "id": 1,
     *          "name": "Airport Shuttle Service",
     *          "status": 1,
     *          "auto_approved": 0,
     *          "description": "",
     *          "service_type_id": null,
     *          "created_at": "2023-12-02T05:05:42.000000Z",
     *          "updated_at": "2023-12-02T05:05:42.000000Z"
     *      }
     *  ]
     * }
     *
     */
    public function serviceList()
    {
        $sercices = Service::all();
        
        return ApiResponse::success($sercices, null, Status::SUCCESS);
    }

    /**
     * @method
     * Settings Data
     *
     * This endpoint is used to get all Settings Data.
     * 
     * @authenticated
     *
     * @response scenario="Request Successfull" {
    *        "status": true,
    *        "message": "Request Successfull",
    *        "data": {
    *            "id": 1,
    *            "business_name": "Your Business Name",
    *            "business_address": "your business address",
    *            "business_number": "00000000000",
    *            "business_email": null,
    *            "time_zone": null,
    *            "logo": null,
    *            "favicon": null,
    *            "meta_title": null,
    *            "meta_description": null,
    *            "meta_image": null,
    *            "mail_host": null,
    *            "mail_port": null,
    *            "mail_username": null,
    *            "mail_password": null,
    *            "mail_from_name": null,
    *            "mail_from_address": null,
    *            "mail_encryption": null,
    *            "mail_status": null,
    *            "stripe_payment": null,
    *            "stripe_key": null,
    *            "stripe_secret": null,
    *            "created_at": "2023-12-02T05:05:42.000000Z",
    *            "updated_at": "2023-12-02T05:05:42.000000Z"
    *        }
    *    }
     *
     */
    public function settingsData()
    {
        $settings = gs();
        return ApiResponse::success($settings, null, Status::SUCCESS);
    }
}
