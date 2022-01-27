<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::create([
            'name'=> 'Patito de hule',
            'slug'=> 'patito-de-hule',
            'picture_url'=> 'https://finde.latercera.com/wp-content/uploads/2021/10/Hecho-en-casa-pato-de-hule-ok.jpg',
            'description'=> 'Soy un patito de Hule coqueton',
            'status'=> 0,
        ]);

        Product::create([
            'name'=> 'Oso de peluche',
            'slug'=> 'oso-de-peluche',
            'picture_url'=> 'https://d3e3r3101xvs9k.cloudfront.net/ProductOriginalPhotos/oso_peluche_gigante.jpg',
            'description'=> 'Soy un oso de peluche tierno',
            'status'=> 1,
        ]);
    }
}
