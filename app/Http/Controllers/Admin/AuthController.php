<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Customer;
use App\Models\TaxiBooking;
use Illuminate\Http\Request;
use App\Models\BookingPayment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success','You have successfully logged in');
        }

        return redirect()->route('login')->with('error','Oppes! You have entered invalid credentials');
    }



    public function dashboard(Request $request){
        $yesterday = Carbon::yesterday()->toDateString();
        $today = Carbon::today()->toDateString();
        $yesterdayBookings = TaxiBooking::whereDate('created_at', $yesterday)->count('id');
        $todayBookings = TaxiBooking::whereDate('created_at', $today)->count('id');
        $difference = $todayBookings - $yesterdayBookings;
        if ($yesterdayBookings != 0) {
            $percentageChange = ($difference / $yesterdayBookings) * 100;
        } else {
            $percentageChange = 0;
        }

        $customers = Customer::whereStatus(1)->count('id');
        $drivers = 1;
        $bookings = TaxiBooking::with(['user', 'service'])->latest()->paginate(10);
        
        return view('admin.home.dashboard', compact('percentageChange', 'todayBookings', 'yesterdayBookings', 'customers', 'drivers', 'bookings'));
    }

    public function logout(Request $request){
            $user = auth()->user();
            if($user->user_type == 0){
                $url = 'login';
            }else{
                $url = 'logout-user';
            }
            Auth::logout();
            return redirect()->route($url)->with('success','You have successfully logged out');
    }

    public function getChartData()
    {
        $startDate = Carbon::now()->subDays(6)->toDateString(); // 6 days ago, including today
        $endDate = Carbon::now()->toDateString(); // Today

        $bookings = TaxiBooking::whereDate('created_at', '>=', $startDate)
        ->whereDate('created_at', '<=', $endDate)
        ->get();
        
        $customers = Customer::whereDate('created_at', '>=', $startDate)
        ->whereDate('created_at', '<=', $endDate)
        ->get();
        $data = [
            'sales' => $bookings->pluck('id')->toArray(),
            'revenue' => $bookings->pluck('final_total')->toArray(),
            'customers' => $customers->pluck('id')->toArray(),
            'dates' => $bookings->pluck('created_at')->map(function ($date) {
                return $date;
            })->toArray(),
        ];

        return response()->json($data);
    }

    public function getPieChartData()
    {
        $payments = BookingPayment::groupBy('payment_method')
            ->selectRaw('SUM(paid_amount) as total_paid_amount, payment_method')
            ->get();

        $paymentData = [
            'data' => $payments->pluck('total_paid_amount')->map(function ($value) {
                return (float) $value; // Convert the value to float
            })->toArray(),
            'labels' => $payments->pluck('payment_method')->toArray(),
        ];

        return response()->json($paymentData);
    }
}
