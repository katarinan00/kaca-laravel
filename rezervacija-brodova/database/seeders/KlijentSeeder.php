<?php

namespace Database\Seeders;

use App\Models\Klijent;
use Illuminate\Database\Seeder;

class KlijentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $klijent = Klijent::factory()->create();
    }
}
