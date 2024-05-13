<?php

namespace App\Traits;
use File;

trait PostTrait {

    public function thumbImageUpload($request, $old=null){
        
        if ($request->hasFile('thumb_image')) {
            $image = $request->file('thumb_image');
            $photos = fileUploader($image, getFilePath('thumbimage'), getFileSize('thumbimage'), $old);
            return $photos;
        }else{
            return null;
        }
    }
    
    public function bannerImageUpload($request, $old=null){
        if ($request->hasFile('banner_image')) {
            $image = $request->file('banner_image');
            $photos = fileUploader($image, getFilePath('bannerimage'), getFileSize('bannerimage'), $old);
            return $photos;
        }else{
            return null;
        }
    }

    public function galleryImageUpload($request, $post=null){

        if($post){
            $images = $post;
            foreach ($images as $imagePath) {
                $filePath = public_path('assests/images/galleryimage/'. $imagePath);

                // Check if the file exists before attempting to delete it
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }
        }

        if ($request->hasFile('gallery_images')) {
            $images = $request->file('gallery_images');
            $photos = [];
            foreach ($images as $image) {
                $photos[] = fileUploader($image, getFilePath('galleryimage'), getFileSize('galleryimage'));
            }
            return $photos;
        }else{
            return null;
        }
    }

}