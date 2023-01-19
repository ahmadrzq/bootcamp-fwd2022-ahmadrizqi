<?php

namespace Database\Seeders;

use App\Models\Operational\Doctor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TypeUserSeeder::class,
            ConsultationSeeder::class,
            ConfigPaymentSeeder::class,
            SpecialistSeeder::class,
            UserSeeder::class,
            DetailUserSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            PermissionRoleSeeder::class,
            RoleUserSeeder::class,
        ]);
        \App\Models\Operational\Doctor::factory(10)->create();
        \App\Models\User::factory(26)->create();
    }
}
