<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsermanagementController extends Controller
{
    public function index() {
        $users = User::all();
        
        return view('admin.user.index', compact('users'));
    }

    public function create(){
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $userRole = $user->roles->pluck('name');
    
        return view('admin.user.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }

        DB::beginTransaction();
        try {
        
            $input = $request->except('password', 'roles');
            if($request->password){
                $input['password'] = Hash::make($input['password']);
            }
        
            $user = User::find($id);
            $user->update($input);
            
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $user->assignRole($request->input('roles'));
            DB::commit();
            return redirect()->route('user-list')->with('success','User updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('user-list')->with('error',$e->getMessage());
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|same:confirm-password'
        ]);

        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }

        DB::beginTransaction();

        try {
        
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $input['is_admin'] = 2;
            $user = User::create($input);
            $user->assignRole($request->input('roles'));
            DB::commit();

            return redirect()->route('user-list')->with('success','User created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('user-list')->with('error',$e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            User::find($id)->delete();
            return redirect()->route('user-list') ->with('success','User deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('user-list')->with('error',$e->getMessage());
        }
    }

    public function show($id){
        try {
            $user = User::find($id);
            $roles = $user->getRoleNames();
            return view('admin.user.show', compact('user', 'roles'));
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('user-list')->with('error',$e->getMessage());
        }
    }
}