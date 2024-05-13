<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{

    public function index() {
        $roles = Role::orderBy('id','DESC')->get();
        $user = Auth::user();
        $user_role = $user->getRoleNames()[0];

        return view('admin.role.index', compact('roles', 'user_role'));
    }

    public function create(){
        $permission = Permission::get();
        return view('admin.role.create', compact('permission'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name',
        ]);
        if ($validator->fails()) {
            return redirect()->back() ->withErrors($validator) ->withInput();
        }

        DB::beginTransaction();

        try {
            $role = Role::create(['name' => $request->input('name')]);
            $role->syncPermissions($request->input('permission'));
            DB::commit();
            return redirect()->route('role-list')->with('success','Role created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('role-list')->with('error', $e->getMessage());
        }
    
        
    }

    public function edit($id)
    {
        try {
            $role = Role::find($id);
            $role_permissions = [];
            foreach ($role->permissions as $role_perm) {
                $role_permissions[] = $role_perm->name;
            }
            return view('admin.role.edit',compact('role', 'role_permissions'));
        } catch (\Exception $e) {
            return redirect()->route('role-list')->with('error', $e->getMessage());
        }
    }

    public function show($id){
        $role_permissions = Role::find($id)->permissions;
        return view('admin.role.show', compact('role_permissions'));
    }

    public function updatePermission(Request $request){
        $this->validate($request, [
            'name' => 'required',
        ]);

        try {
            $role_id = $request->role_id;
            $role = Role::find($role_id);
            $role->name = $request->name;
            $role->save();
            $permission = $request->permissions;
            $role->syncPermissions($permission);

            return redirect()->route('role-list')->with('success','Data updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('role-list')->with('error', $e->getMessage());
        }

    }

    public function destroy($id){
        try {
            $role = Role::find($id);
            $role->delete();
            return redirect()->route('role-list')->with('success','Data deleted Successfully');
        } catch (\Exception $e) {
            return redirect()->route('role-list')->with('error', $e->getMessage());
        }
    }
}
