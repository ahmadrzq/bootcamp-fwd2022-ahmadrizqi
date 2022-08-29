<?php

namespace Database\Seeders;

use App\Models\MasterData\ConfigPayment;
use Illuminate\Database\Seeder;
use Ilumintate\Support\Facade\DB;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create data here
        $config_payment = [
            [
                'fee' => '150000',
                'vat' => '20', // vat is percentage
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // this array $config_payment will be insert to table 'config_payment'
        ConfigPayment::insert($config_payment);
    }
}
