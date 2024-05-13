<?php

namespace App\Constants;

class FileInfo
{

    /*
    |--------------------------------------------------------------------------
    | File Information
    |--------------------------------------------------------------------------
    |
    | This trait basically contain the path of files and size of images.
    | All information are stored as an array. Developer will be able to access
    | this info as method and property using FileManager class.
    |
    */

    public function fileInfo()
    {

        $data['carphotos'] = [
            'path'      => 'assets/images/carphotos',
            'size'      => '200x200',
        ];
        
        $data['galleryimage'] = [
            'path'      => 'assets/images/galleryimage',
            'size'      => '100x100',
        ];
        
        $data['bannerimage'] = [
            'path'      => 'assets/images/bannerimage',
            'size'      => '600x800',
        ];
        
        $data['pagebanner'] = [
            'path'      => 'assets/images/pagebanner',
            'size'      => '1080x600',
        ];
        $data['page'] = [
            'path'      => 'assets/images/page',
            'size'      => '1080x600',
        ];
        
        $data['thumbimage'] = [
            'path'      => 'assets/images/thumbimage',
            'size'      => '150x150',
        ];
        
        $data['slider'] = [
            'path'      => 'assets/images/slider',
            'size'      => '1280x780',
        ];

        $data['logo'] = [
            'path' => 'assets/images/setting',
            'size' => '250x100',
        ];
        
        $data['fav_icon'] = [
            'path' => 'assets/images/setting',
            'size' => '50x50',
        ];
        
        $data['userphoto'] = [
            'path' => 'assets/images/userphoto',
            'size' => '100x100',
        ];
        
        $data['amenite'] = [
            'path' => 'assets/images/amenite',
            'size' => '300x400',
        ];
        
        $data['license_photo'] = [
            'path' => 'assets/images/license_photo',
            'size' => '100x100',
        ];
        
        $data['nid_photo'] = [
            'path' => 'assets/images/nid_photo',
            'size' => '100x100',
        ];
        $data['whychoose'] = [
            'path' => 'assets/images/whychoose',
            'size' => '50x50',
        ];
        
        $data['passport_photo'] = [
            'path' => 'assets/images/passport_photo',
            'size' => '100x100',
        ];
        $data['documents'] = [
            'path' => 'assets/images/documents',
            'size' => '100x100',
        ];
        
        $data['ticket'] = [
            'path' => 'assets/suppot',
            'size' => '100x100',
        ];

        

        return $data;
    }
}
