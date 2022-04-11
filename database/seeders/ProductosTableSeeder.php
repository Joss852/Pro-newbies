<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'name' => 'FINAL FANTASY VII REMAKE',
            'description' => 'es un videojuego de rol desarrollado y publicado por la empresa Square para la plataforma PlayStation.',
            'price' => 1799,
            'image' =>'https://m.media-amazon.com/images/I/81J-uEoQ6WL._AC_SL1500_.jpg',
        ]);

        Producto::create([
            'name' => 'Call Of Duty Black Ops 3',
            'description' => 'Disponible para PlayStation, Pc y Xbox',
            'price' => 1082,
            'image' => 'https://static.wikia.nocookie.net/cod/images/d/d0/Call_of_Duty_Black_Ops_3_wikia.jpg/revision/latest?cb=20150613104137&path-prefix=es',
        ]);

        Producto::create([
            'name' => 'Forza Horizon 5',
            'description' => 'Disponible para Pc y Xbox',
            'price' => 1899,
            'image' => 'https://store-images.s-microsoft.com/image/apps.49800.13718773309227929.bebdcc0e-1ed5-4778-8732-f4ef65a2f445.9ac09d39-064d-466c-81ca-2f1b6f0b95c5'
        ]);

        Producto::create([
            'name' => 'Logitech Hero G502 RGB',
            'description' => 'Mouse gamer con 16000 DPI y 11 botones programables',
            'price' => 785,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_808797-MLM47618289723_092021-O.jpg'
        ]);

        Producto::create([
            'name' => 'HeadSets Gamer Razer Kraken',
            'description' => 'Audifonos gamer con cilicona moldeable color verde a 7.1 canales',
            'price' => 1240,
            'image' => 'https://m.media-amazon.com/images/I/71BKQhFzDmL._AC_SY450_.jpg'
        ]);

        Producto::create([
            'name' => 'Bundle Teclado + Mouse Gaming Corsair K55',
            'description' => 'Kit para empesar enlos videojuegos marca corsair, Teclado + Mouse Con luces RGB',
            'price' => 2450,
            'image' => 'https://corporaciondash.com/wp-content/uploads/2019/08/gimage_22803.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox One Series X',
            'description' => 'Consola de videojuegos XBOX Series X',
            'price' => 13542,
            'image' => 'https://ss423.liverpool.com.mx/xl/1100132318.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox Onse Series S',
            'description' => 'Consola de videojuegos XBOX Series S',
            'price' => 8999,
            'image' => 'https://gameplanet-53f8.kxcdn.com/media/catalog/Producto/cache/4/image/9df78eab33525d08d6e5fb8d27136e95/s/e/series_s_1_1_1.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox Ones X Gears 5 Edition',
            'description' => 'Xbox One X Edicion limitada Gears 5',
            'price' => 7899,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_982526-MLA45242877108_032021-O.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox Ones S Gears 4 Edition',
            'description' => 'Xbox One S Edicion limitada Gears 4',
            'price' => 6899,
            'image' => 'https://m.media-amazon.com/images/I/719g3vUqljL._SX466_.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox 360 Gears of War 3 Edition',
            'description' => 'Xbox 360 Gears of War 3 Edition',
            'price' => 5999,
            'image' => 'https://m.media-amazon.com/images/I/719g3vUqljL._SX466_.jpg'
        ]);
    }
}
