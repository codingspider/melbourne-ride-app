<?php

namespace App\Http\Controllers\Home;

use Carbon\Carbon;
use App\Models\Page;
use F9Web\Meta\Meta;
use App\Models\Fleet;
use App\Models\Slider;
use GuzzleHttp\Client;
use App\Models\Feature;
use App\Models\Package;
use App\Models\Service;
use App\Models\Vehicle;
use App\Models\Amenitie;
use App\Models\Frontend;
use App\Models\WhyChoose;
use App\Models\ContactPage;
use App\Models\HomeSection;
use App\Models\TaxiBooking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::whereStatus(1)->get();
        $sliders = Slider::whereStatus(1)->get();
        $fleets = Vehicle::whereStatus(1)->get();
        $data = HomeSection::latest()->first();
        $whychooses = WhyChoose::where('status', 1)->take(6)->orderByDesc('created_at')->get();

        Meta::set('title', 'Hire Melbourne Chauffeur Services | Melbourne Limolink')
            ->set('description', 'Melbourne Limolink is the Best Chauffeur Services in Melbourne. We are ONE STOP HASSLE FREE for Chauffeured Driven Luxury Cars. Experienced Drivers.')
            ->set('keywords', 'Melbourne Limolink is the Best Chauffeur Services in Melbourne. We are ONE STOP HASSLE FREE for Chauffeured Driven Luxury Cars. Experienced Drivers.')
            ->noIndex();

        return view('theme.home.index', compact('services', 'sliders', 'fleets', 'data', 'whychooses'));
    }

    public function sendSMS(){
        $bookings = TaxiBooking::all();

        foreach($bookings as $booking){
            $pickUpTime = Carbon::parse($booking->pick_up_time);
            $customer_reminder = $pickUpTime->subHours(3);
            $admin_reminder = $pickUpTime->subHours(8);

            if (now()->gte($customer_reminder)) {
                sendCustomerSMS($booking);
            }
            
            if (now()->gte($admin_reminder)) {
                sendAdminSMS($booking);
            }
        }
    }

    public function ourFleets()
    {
        return view('home.home.our_fleets');
    }

    public function getOurFleets(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $items = Fleet::whereStatus(1)->paginate($perPage);
        return view('home.home.fleets', compact('items'));
    }

    public function contact()
    {
        $data = ContactPage::latest()->first();
        return view('theme.home.contact', compact('data'));
    }
    
    public function terms()
    {
        $page = Page::where('slug', 'terms-and-conditions')->first();
        return view('theme.home.terms', compact('page'));
    }
    
    public function privacy()
    {
        $page = Page::where('slug', 'privacy-policy')->first();
        return view('theme.home.privacy', compact('page'));
    }
    
    public function about()
    {
        return view('theme.home.about');
    }
    
    public function refund()
    {
        $page = Page::where('slug', 'refund-policy')->first();
        return view('theme.home.refund', compact('page'));
    }

    public function price()
    {
        $packages = Package::with('feature')->where('status', 1)->latest()->get();
        return view('theme.home.price', compact('packages'));
    }

    public function weddingPackage() {
        $title = 'Luxury Wedding Car Hire Prices Melbourne';
        $packages = Package::with('feature')->where('status', 1)->where('page_id', 112)->get();
        return view('theme.home.price', compact('packages', 'title'));
    }
    
    public function privatePackage() {
        $title = 'Melbourne Private Tour Packages';
        $packages = Package::with('feature')->where('status', 1)->where('page_id', 110)->get();
        return view('theme.home.price', compact('packages', 'title'));
    }
    
    public function googleReview(){
        $client = new Client();

        try {
            $response = $client->request('GET', "https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJ9xK9DF1Q1moRZGnNzSA_4Pg&fields=reviews&key=AIzaSyAkD85-XjXhVNdJ5rVdI1hrUvR8hCEK07U");
            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);

            $reviews = $data['result']['reviews'];
            return view('reviews', compact('reviews'));
        } catch (\Exception $e) {
            // Handle error
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
