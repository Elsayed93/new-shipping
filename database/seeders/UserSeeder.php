<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        // permissions
        $permissions = [
            [
                'name' => 'admin permissions',
                'guard_name' => 'web',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'vendor permissions',
                'guard_name' => 'web',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'user permissions',
                'guard_name' => 'web',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        DB::table('permissions')->insert($permissions);

        // roles
        $adminRole = Role::create(
            [
                'name' => 'admin',
            ]
        );

        $adminPermissions = [
            ['name' => 'admin permissions'],
        ];

        // assign permissions to the role
        $adminRole->givePermissionTo($adminPermissions);

        $admin =  User::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
        ]);

        $admin->assignRole($adminRole);


        // vendor

        // roles
        $vendorRole = Role::create(
            [
                'name' => 'vendor',
            ]
        );

        $vendorPermissions = [
            ['name' => 'vendor permissions'],
        ];

        // assign permissions to the role
        $vendorRole->givePermissionTo($vendorPermissions);

        $vendor =  User::create([
            'name' => 'vendor',
            'email' => 'vendor@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'vendor',
        ]);

        $vendor->assignRole($vendorRole);



        // user
         // user

        // roles
        $userRole = Role::create(
            [
                'name' => 'user',
            ]
        );

        $userPermissions = [
            ['name' => 'user permissions'],
        ];

        // assign permissions to the role
        $userRole->givePermissionTo($userPermissions);

        $user =  User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'user',
        ]);

        $user->assignRole($userRole);
    }
}
