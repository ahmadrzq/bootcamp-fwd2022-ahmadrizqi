<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\Specialist;
use Ilumintate\Support\Facade\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data here
        $specialist = [
            [
                'name' => 'Dermatology',
                'price' => '250000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dentist',
                'price' => '450000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Endodontics',
                'price' => '150000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'General Dentistry',
                'price' => '120000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Oral and Maxillofacial Surgery',
                'price' => '80000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Orthodontics',
                'price' => '900000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pediatric Dentistry',
                'price' => '300000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Periodontics',
                'price' => '250000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Prosthodontics',
                'price' => '250000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Radiology',
                'price' => '250000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Surgery',
                'price' => '250000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Urology',
                'price' => '250000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        //this array specialist will be insert to table 'specialist'
        Specialist::insert($specialist);
    }
}
