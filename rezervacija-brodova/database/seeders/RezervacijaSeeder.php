<?php

namespace Database\Seeders;

use App\Models\Rezervacija;
use App\Models\Klijent;
use App\Models\Brod;
use Illuminate\Database\Seeder;

class RezervacijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $klijent = Klijent::factory()->create();
        $brod1 = Brod::factory()->create();
        $brod2 = Brod::factory()->create();

        Rezervacija::factory(5)->create([
            'klijent_id'=>$klijent->id,
            'brod_id'=>$brod1->id
           ]);

           Rezervacija::factory(4)->create([
            'klijent_id'=>$klijent->id,
            'brod_id'=>$brod2->id
           ]);
    }
}
