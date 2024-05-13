<?php

namespace App\Http\Controllers\API\Driver;

use App\Constants\Status;
use App\Traits\DriverTrait;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Models\TransportType;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DriverTransportDetails;
use Illuminate\Support\Facades\Validator;

class TransportController extends Controller
{
    use DriverTrait;
    /**
     * @method
     * 
     * Update Vehicle Information
     * 
     * #TODO Need to modify
     * 
     * @bodyParam driver_id integer required Example: 1
     * @bodyParam transport_type_id integer required Example: 5
     * @bodyParam name string required Example: Audi 8
     * @bodyParam register_no string required Example: BD96587
     * @bodyParam engine_no string required Example: GH8965874
     * @bodyParam license_number string required Only for driver Example: 35342534
     * @bodyParam chasis_no string required Example: 35342534
     * @bodyParam model_no string required Only for driver Example: 35342534
     * @bodyParam seat_capacity string required Example: 1,2,3
     * @bodyParam car_planumber string required Example: 1236
     * @bodyParam operating_license string required Example: 585269
     * @bodyParam car_luggage integer required Example: 5
     * @bodyParam car_photos string optional Example: ['image_1', 'image_2']
     * 
     * @response scenario="Request Successfull" {
     *       "status": true,
     *       "message": "Information updated successfully",
     *       "data": null
     *   }
     * 
     * @response 417 scenario="Request Failed"{
     * "status": false,
     * "message": "Error Occurred."
     * }
     * 
     */
    public function updateVehicleInformation(Request $request){
        try {

            $validator = Validator::make($request->all(), [
                'driver_id' => 'required',
                'transport_type_id' => 'required',
                'name' => 'required',
                'register_no' => 'required',
                'engine_no' => 'required',
                'chasis_no' => 'required',
                'model_no' => 'required',
                'seat_capacity' => 'required',
                'car_planumber' => 'required',
                'operating_license' => 'required',
                'car_luggage' => 'required',
                
            ]);

            if ($validator->fails()) {
                return ApiResponse::error($validator->errors(), Status::VALIDATION_ERROR);
            }
            DB::beginTransaction();
            $inputs = $request->except('car_photos');
            if($request->car_photos){
                $car_photos = $this->carPhotoUpload($request);
                $inputs['car_photos'] = json_encode($car_photos);
            }
            $criteria = ['driver_id' => $request->driver_id];
            $data = DriverTransportDetails::updateOrCreate($criteria, $inputs);
            DB::commit();
            return ApiResponse::success($data, 'Data retrive successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }


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
    
    public function typeList(){
        try {
            $types = TransportType::all();
            return ApiResponse::success($types, 'Data retrive successfully', Status::SUCCESS);

        } catch (\Exception $e) {
            return ApiResponse::error('An error occurred: '. $e->getMessage(), Status::ERROR);
        }
    }
}