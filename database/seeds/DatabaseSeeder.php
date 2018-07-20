<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(ComunasTableSeeder::class);
        factory(App\Property::class, 50)->create();
        factory(App\PropertyImage::class, 200)->create();
        factory(App\PropertyDoc::class, 100)->create();

    }
}
