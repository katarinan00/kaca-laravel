<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RezervacijaSeeder;
use Database\Seeders\KlijentSeeder;
use Database\Seeders\BrodSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $BrodSeeder = new BrodSeeder;
        $BrodSeeder->run();

        $KlijentSeeder = new KlijentSeeder;
        $KlijentSeeder->run();

        $RezervacijaSeeder = new RezervacijaSeeder;
        $RezervacijaSeeder->run();
    }
}
