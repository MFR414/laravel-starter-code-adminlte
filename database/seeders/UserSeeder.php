<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function() {
            $superAdmin = User::where('name', 'Super Admin')->first();
            if(empty($superAdmin)){
                $superAdmin = User::create([
                    'name' => 'Super Admin',
                    'username' => 'SuperAdmin123',
                    'address' => 'testing street 123, testing, testing city',
                    'phone_number' => '123345689655',
                    'email' => 'super_admin@elaundry.id',
                    'password' => bcrypt('password'),
                ]);

                $superAdmin->assignRole('Super Admin');
            }

            $admin = User::where('name', 'Admin')->first();
            if(empty($admin)){

                $admin = User::create([
                    'name' => 'Admin',
                    'username' => 'Admin123',
                    'address' => 'testing street 123, testing, testing city',
                    'phone_number' => '123345689855',
                    'email' => 'admin@elaundry.id',
                    'password' => bcrypt('password')
                ]);

                $admin->assignRole('Admin');
            }

            // $worker = User::where('name', 'Worker')->first();
            // if(empty($worker)){
            //     $worker = User::create([
            //         'name' => 'Worker',
            //         'username' => 'Worker123',
            //         'address' => 'testing street 123, testing, testing city',
            //         'phone_number' => '123345896755',
            //         'email' => 'worker@elaundry.id',
            //         'password' => bcrypt('password'),
            //         'tenant_id' => $tenant->id
            //     ]);

            //     $worker->assignRole('Worker User');
            // }
        });
    }
}
