<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'service-list',
            'service-create',
            'service-edit',
            'service-delete',

            'transport-list',
            'transport-create',
            'transport-edit',
            'transport-delete',

            'amenitie-list',
            'amenitie-create',
            'amenitie-edit',
            'amenitie-delete',

            'category-list',
            'category-create',
            'category-edit',
            'category-delete',

            'subcategory-list',
            'subcategory-create',
            'subcategory-edit',
            'subcategory-delete',

            'tag-list',
            'tag-create',
            'tag-edit',
            'tag-delete',

            'post-list',
            'post-create',
            'post-edit',
            'post-delete',

            'setting-list',
            'setting-create',
            'setting-edit',
            'setting-delete',

            'customer-list',
            'customer-create',
            'customer-edit',
            'customer-delete',

            'taxi-booking-list',
            'taxi-booking-create',
            'taxi-booking-edit',
            'taxi-booking-delete',

            'coupon-list',
            'coupon-create',
            'coupon-edit',
            'coupon-delete',

            'fare-list',
            'fare-create',
            'fare-edit',
            'fare-delete',
    
            'slider-list',
            'slider-create',
            'slider-edit',
            'slider-delete',

            'taxi-booking-approve-list',
            'taxi-booking-approve-create',
            'taxi-booking-approve-edit',
            'taxi-booking-approve-delete',
            
            'page-list',
            'page-create',
            'page-edit',
            'page-delete',
            
            'menu-list',
            'menu-create',
            'menu-edit',
            'menu-delete',

            

            // customer permission
            
         ];
      
         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
         }

         $role = Role::create([
            'name' => 'Super Admin',
            'guard_name' => 'web'
         ]);

        $role = Role::find(1);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user = User::find(1);
        $user->assignRole($role);

    }
}
