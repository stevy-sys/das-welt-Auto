<?php

use Illuminate\Database\Seeder;

class VoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Http\Models\Voiture::class,10)->create();
    }
}
