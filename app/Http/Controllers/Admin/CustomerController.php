<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Customer;
use App\Traits\UserTrait;
use Illuminate\Http\Request;
use App\Traits\UserProfileTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{

    use UserTrait;
    use UserProfileTrait;

    public function __construct()
    {
        $this->middleware('permission:customer-list,customer-create,customer-edit,customer-delete');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $customers = User::all();
            return view('admin.customer.index', compact('customers'));
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'status' => 'required',
            'password' => 'required|same:confirm-password',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }

        DB::beginTransaction();
        try {
            //Create user...
            $user = $this->userProfileDataUpdate($request, 2, 2, 1);
            $driver = $this->customerProfileUpdate($user, $request);
            
            DB::commit();
            
            return redirect()->route('customer.index')->withSuccess('Customer created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $user = User::find($customer->user_id);
            $this->userProfileDataUpdate($user, $request);
            $this->userProfilePictureStore($user, $request);
            DB::commit();
            
            return redirect()->route('customer.index')->withSuccess('Customer created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $item = Customer::find($id);
            User::where('id', $item->user_id)->delete();
            $item->delete();

            return redirect()->route('customer.index')->withSuccess('Customer deleted successfully.');
        } catch (\Exception $e) {
            return back()->withError('An error occurred: ' . $e->getMessage());
        }
    }
}