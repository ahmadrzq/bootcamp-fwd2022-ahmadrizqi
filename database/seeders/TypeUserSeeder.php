<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\TypeUser;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create data here
        $type_user = [
            [
                'name' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Perawat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // this array $type_user will be insert to table 'type_user'
        TypeUser::insert($type_user);
    }
}
