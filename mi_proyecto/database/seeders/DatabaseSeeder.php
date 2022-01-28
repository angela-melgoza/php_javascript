<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 /*       Product::create([
            'name'=> 'Funko Pop TV: Marvel Hawkeye - Kate Bishop con Lucky el perro de la pizza',
            'slug'=> 'kate-bishop',
            //'price' => '289',
            'picture_url'=> 'http://cdn.shopify.com/s/files/1/0362/6378/8588/products/Compra_Funko_Pop_Marvel_Tv_Hawkeye_Kate_Bishop_With_Lucky_The_Pizza_Dog_1212_Arte.jpg?v=1638036504',
            //'picture_one' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/be1f4e63a47d4ac3a87643cd345f995dxl_340x340.jpg?v=1637950322',
            //'picture_two' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/WhatsAppImage2021-11-26at12.12.31PM_340x340.jpg?v=1637950370',
            //'picture_three'=> 'https://cdn.shopify.com/s/files/1/0362/6378/8588/products/Compra_Funko_Pop_Marvel_Tv_Hawkeye_Kate_Bishop_With_Lucky_The_Pizza_Dog_1212_Ambas_1024x.jpg?v=1638036504',
            'description'=> 'Funko trae hasta ti a Hawkeye la nueva miniserie de Disney+, adéntrate a esta nueva aventura del MCU con Clint Barton que junto con la joven Kate Bishop que se enfrentaran a nuevos enemigos, con este increíble modelo Pop & Buddy de Kate Bishop con Lucky el perro de la pizza, Inspirados en la tan esperada serie de Hawkeye. has crecer tu colección Pop Marvel y llévate a casa a Kate Bishop con Lucky.',
            'status'=> 1,
        ]);

        Product::create([
            'name'=> 'Funko Pop TV: Marvel Hawkeye - Yelena Belova',
            'slug'=> 'yelena',
            //'price' => '289',
            'picture_url'=> 'https://cdn.shopify.com/s/files/1/2437/4099/products/WhatsAppImage2021-12-17at11.09.28_4_340x340.jpg?v=1639761191',
            //'picture_one' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/7a2da5d933394de6b02f92a6d886b9a6xl_340x340.jpg?v=1639761478',
            //'picture_two' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/WhatsAppImage2021-12-17at11.09.28_3_340x340.jpg?v=1639761024',
            //'picture_three'=> 'https://cdn.shopify.com/s/files/1/2437/4099/products/WhatsAppImage2021-12-17at11.09.28_1_340x340.jpg?v=1639761191',
            'description'=> 'Funko trae hasta ti a Hawkeye la nueva miniserie de Disney+, adéntrate a esta nueva aventura del MCU con Clint Barton que junto con la joven Kate Bishop se enfrentarán a nuevos enemigos, como esta viuda negra en este increíble modelo Funko Pop TV Inspirado en la aparición en la serie de Hawkeye. haz crecer tu colección Pop Marvel y llévate a casa a Yelena Belova.',
            'status'=> 1,
        ]);
        
        Product::create([
            'name'=> 'Funko Pop Marvel: WandaVision - Wanda Halloween',
            'slug'=> 'wanda-halloween',
            //'price' => '279',
            'picture_url'=> 'https://m.media-amazon.com/images/I/61E7EXDiNmL._AC_SX679_.jpg',
            //'picture_one' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/844ceb6-248c-4b7b-b45e-fbbc2fe15dbb_340x316.jpg?v=1606869040',
            //'picture_two' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/69280b0-8df2-4c95-9075-d6dacedda71b_340x316.jpg?v=1606869040',
            //'picture_three'=> 'https://cdn.shopify.com/s/files/1/2437/4099/products/FU52044lg_340x340.jpg?v=1602609132',
            'description'=> 'Funko Pop WandaVision No. 715. Preparate para la anticipada serie de Disney + y Marvel con esta nueva colección inspirada en WandaVision la nueva serie que tiene un estilo retro de los años Cincuentas y Setentas, esta esperada serie presentará los acontecimientos de la vida de la Bruja Escarlata y Vision tras los sucesos de las películas de Avengers, no te puedes perder la oportunidad de llevar a casa estos increibles coleccionables',
            'status'=> 1,
        ]);

        Product::create([
            'name'=> 'Funko Pop Marvel: WandaVision - Vision Halloween',
            'slug'=> 'vision-halloween',
            //'price' => '279',
            'picture_url'=> 'https://m.media-amazon.com/images/S/aplus-media/vc/abc18750-1263-4445-8bae-aca1f502e9ef.__CR0,0,1000,1000_PT0_SX300_V1___.jpg',
            //'picture_one' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/ffb72a6-16ba-497d-ab5a-57c7729014c8_532x494.jpg?v=1606868038',
            //'picture_two' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/bebb8ca-37c8-4e83-8e71-4369fab416a1_532x494.jpg?v=1606868041',
            //'picture_three'=> 'https://cdn.shopify.com/s/files/1/2437/4099/products/FU52045lg_500x500.jpg?v=1602609133',
            'description'=> 'Funko Pop WandaVision No. 715. Preparate para la anticipada serie de Disney + y Marvel con esta nueva colección inspirada en WandaVision la nueva serie que tiene un estilo retro de los años Cincuentas y Setentas, esta esperada serie presentará los acontecimientos de la vida de la Bruja Escarlata y Vision tras los sucesos de las películas de Avengers, no te puedes perder la oportunidad de llevar a casa estos increibles coleccionables',
            'status'=> 1,
        ]);

        Product::create([
            'name'=> 'Funko Pop Marvel: Eternals - Thena',
            'slug'=> 'thena',
            //'price' => '289',
            'picture_url'=> 'https://cdn.shopify.com/s/files/1/0362/6378/8588/products/compra_funko_pop_marvel_eternals_thena_729_arte_356eba18-9fa8-4a55-9f10-223822754978_1024x.jpg?v=1636219518',
            //'picture_one' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/49706_Eternals_Thena_POP_GLAM-WEB_532x532.png?v=1629480661',
            //'picture_two' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/49706_Eternals_Thena_POP_GLAM-1-WEB_532x532.png?v=1629480661',
            //'picture_three'=> 'https://i5.walmartimages.com/asr/04b569e8-9e05-4c6a-b985-cc5a8a064bcc.3fd91be9f92cb91414387f853a2fd6cb.jpeg',
            'description'=> 'De la nueva película de Marvel: Eternals, llega esta nueva colección de funko inspirada en estos nuevos personajes que se suman al universo del MCU, no pierdas la oportunidad y haz crecer tu colección con las figuras funko pop de tus personajes favoritos!',
            'status'=> 1,
        ]);

        Product::create([
            'name'=> 'Funko Pop Deluxe Marvel: Iron Man 2 - Iron Man Mark IV Exclusivo',
            'slug'=> 'mark-iv',
            //'price' => '679',
            'picture_url'=> 'http://cdn.shopify.com/s/files/1/0362/6378/8588/products/IRONGLW.jpg?v=1625503344',
            //'picture_one' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/1436_4202_8d91c7d7410d882_56772_Marvel_IronMan-Gantry_POP_GLAM-HiRes_532x532.jpg?v=1622654460',
            //'picture_two' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/1436_4202_8d91c7d73d72444_56772_Marvel_IronMan-Gantry_POP_GLAM-1-IE-HiRes_532x532.jpg?v=1622654460',
            //'picture_three'=> 'https://cdn.shopify.com/s/files/1/2437/4099/products/1436_3266_8d91c7d7324d9a0_56772_Marvel_IronMan-Gantry_GW_POP_GLAM-WEB_532x532.png?v=1622654460',
            'description'=> 'Te traemos directamente desde Marvel Comics, un diseño exclusivo de la en uno de los perosnajes más reconocidos del universo Marvel, se trata del Funko Pop Deluxe Marvel: Iron Man 2 - Iron Man Mark IV Exclusivo.

            Las figuras Funko Pop traen a tus personajes favoritos de Marvel de una manera estilizada e increíble, vienen en una caja con ventana lista para exhibirse.',
            'status'=> 1,
        ]);

        Product::create([
            'name'=> 'Funko Pop Marvel: Spiderman No Way Home - Spiderman Traje Integrado',
            'slug'=> 'spiderman-nwh',
            //'price' => '289',
            'picture_url'=> 'http://cdn.shopify.com/s/files/1/0362/6378/8588/products/compra_funko_pop_marvel_spider_man_no_way_home_spider_man_integrated_suit_913_arte.jpg?v=1637105049',
            //'picture_one' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/15caebd6d5e842978a9e3902be2b70acxl_532x532.jpg?v=1637003715',
            //'picture_two' => 'https://cdn.shopify.com/s/files/1/2437/4099/products/ab1a7c52a32f4b1cad5958ea3be9d00dxl_532x532.jpg?v=1637003715',
            //'picture_three'=> 'https://m.media-amazon.com/images/I/41xnLg-pLSS._SL500_.jpg',
            'description'=> 'Desde la próxima aventura de nuestro arácnido favortio del Universo Cinematográfico de Marvel, llega esta nueva colección de Funko inspirado en la nueva película Spiderman No Way Home, no dejes pasar la oportunidad y arma tu colección con estos increíbles modelos',
            'status'=> 1,
        ]);
*/

        if(!Role::where('name','root')->exists()){
            $role = Role::create(['name' => 'root']);
        }

        if(!Role::where('name','dev')->exists()){
            $role = Role::create(['name' => 'dev']);
        }

        if(!Role::where('name','customer')->exists()){
            $role = Role::create(['name' => 'customer']);
        }
        
        if(!Permission::where('name','product create')->exists()){
            $permission = Permission::create(['name' => 'product create']);
        }
        
        if(!Permission::where('name','product read')->exists()){
            $permission = Permission::create(['name' => 'product read']);
        }
        
        if(!Permission::where('name','product update')->exists()){
            $permission = Permission::create(['name' => 'product update']);
        }
        
        if(!Permission::where('name','product delete')->exists()){
            $permission = Permission::create(['name' => 'product delete']);
        }

        if(!Permission::where('name','user create')->exists()){
            $permission = Permission::create(['name' => 'user create']);
        }
        /*
        $role = Role::find(2);
        $role->givePermissionTo('product create');
        $role->givePermissionTo('product read');
        $role->givePermissionTo('product update');
        $role->givePermissionTo('product delete');
        */
/*
        $user = User::find(1);
        $user->assignRole('root');
        $user = User::create([
            'name' => 'Francisco',
            'email' => 'francisco@email.com',
            'password' => Hash::make('12345678'),
        ]);
        $user->assignRole('dev');
*/
    }
}
