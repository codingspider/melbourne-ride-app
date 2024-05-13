<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactPage;
use App\Models\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function homeData()
    {
        $data = HomeSection::first();

        return view('admin.home.section', compact('data'));
    }

    public function homeDataSave(Request $request)
    {
        DB::beginTransaction();
        try {
            $inputs = $request->all();

            $data = HomeSection::latest()->first();

            if ($request->hasFile('vehicle_categories_image')) {
                $old = $data->vehicle_categories_image;
                $image_1 = $request->file('vehicle_categories_image');
                $vehicle_categories_image = fileUploader($image_1, getFilePath('pagebanner'), getFileSize('pagebanner'), $old);
                $inputs['vehicle_categories_image'] = $vehicle_categories_image;
            }
            $matchThese = ['id' => 1];

            $post = HomeSection::updateOrCreate($matchThese, $inputs);
            DB::commit();
            return redirect()->route('home-page-data')->withSuccess('Page data updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
    
    public function contactData()
    {
        $data = ContactPage::first();
        return view('admin.home.contact_section', compact('data'));
    }

    public function contactDataSave(Request $request)
    {
        DB::beginTransaction();
        try {
            $inputs = $request->all();
            $data = ContactPage::latest()->first();
            $matchThese = ['id' => 1];
            $post = ContactPage::updateOrCreate($matchThese, $inputs);
            DB::commit();
            return redirect()->route('contact-page-data')->withSuccess('Page data updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}
