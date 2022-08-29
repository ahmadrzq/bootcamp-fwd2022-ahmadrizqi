<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\Consultation;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // create data here
         $consultation = [
            [
                'name' => 'Jantung Sesak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tekanan Darah Tinggi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gangguan Irama Jantung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // this array $consultation will be insert to table 'consultation'
        Consultation::insert($consultation);
    }
}
