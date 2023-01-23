<?php

namespace Database\Seeders;

use App\Models\Brod;
use Illuminate\Database\Seeder;

class BrodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brod1 = Brod::factory()->create();
        $brod2 = Brod::factory()->create();
    }
}
