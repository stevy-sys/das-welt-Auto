<?php

use Illuminate\Database\Seeder;

class CouvertureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Http\Models\Couverture::class,3)->create();
    }
}
