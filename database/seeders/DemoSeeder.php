<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\RolePermission;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('log')->insert([
            'name' => Str::random(10),
            'abilities' => Str::random(10) . '@example.com',
            'last_used_at' => now(),
            'created_at' => now(),
        ]);
        // $user = User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'password' => Hash::make('password'),
        // ]);
        // $role = Role::create([
        //     'name' => 'Admin',
        //     'description' => 'Admin role',
        // ]);
        // $permission = Permission::create([
        //     'name' => 'View Users',
        //     'description' => 'View users',
        // ]);
        // $rolePermission = RolePermission::create([
        //     'role_id' => $role->id,
        //     'permission_id' => $permission->id,
        // ]);
    }
}



//         ]);
//     }
// }
