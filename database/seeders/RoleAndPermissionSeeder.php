<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::updateOrCreate(["name"=>"product.create"]);
        Permission::updateOrCreate(["name"=>"product.update"]);
        Permission::updateOrCreate(["name"=>"product.delete"]);
        Permission::updateOrCreate(["name"=>"users.show"]);
        Permission::updateOrCreate(["name"=>"users.update"]);
        Permission::updateOrCreate(["name"=>"users.delete"]);

        $superadmin = Role::updateOrCreate(["name"=>"admin"]);
        $superadmin->givePermissionTo(Permission::all());

        User::whereName('admin')->first()->assignRole('admin');

    }
}
