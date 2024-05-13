<?php

namespace App\Traits;

use App\Models\User;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

trait DriverTrait {

    public function carPhotoUpload($request){
        if ($request->hasFile('car_photos')) {
            $images = $request->file('car_photos');
            $photos = [];
            foreach ($images as $image) {
                $photos[] = fileUploader($image, getFilePath('carphotos'), getFileSize('carphotos'));
            }
            return $photos;
        }
    }
}