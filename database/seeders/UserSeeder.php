<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->delete();
        $user = User::create([
            'name' => 'ahmed nader',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'roles_name' => 'User',
            'Status' => 'active',
        ]);
        $role = Role::create(['name' => "User"]);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
        }
}

