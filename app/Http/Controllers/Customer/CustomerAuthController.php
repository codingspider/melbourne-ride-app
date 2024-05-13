<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use App\Models\Service;
use App\Traits\UserTrait;
use Illuminate\Http\Request;
use App\Traits\CustomerTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomerAuthController extends Controller
{
    use UserTrait;
    
    public function login(){
        return view('customer.auth.customer_login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('customer-dashboard')->with('success','Login successful');
        }
    }

    public function dashboard(Request $request){
        return view('customer.dashboard');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('home')->with('success','You have successfully logged out');
    }

    public function register(Request $request){
        $services = Service::whereStatus(1)->get();
        return view('customer.auth.customer_register', compact('services'));
    }

    public function registerPost(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        DB::beginTransaction();
        try {
            
            $inputs = $request->all();
            User::create($inputs);
            
            DB::commit();
            return redirect()->route('home')->withSuccess('User created successfully.');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}