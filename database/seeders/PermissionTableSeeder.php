<?php
// use Illuminate\Database\Seeder;
// use Spatie\Permission\Models\Permission;

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$permissions = [
        'users',
        'users menu',
        'users permissions',
        'Driver Information',
        'Car Information',
        'Health condition of the driver',
        'Add Driver Inf',
        'Notifications',
        'Edit inf',
        'Delete inf',
        'Control Car',
];
foreach ($permissions as $permission) {
Permission::create(['name' => $permission]);
}
}
}
