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
            'price' => 1799,
            'description' => 'es un videojuego de rol desarrollado y publicado por la empresa Square para la plataforma PlayStation.',
            'image' => 'https://m.media-amazon.com/images/I/81J-uEoQ6WL._AC_SL1500_.jpg',
        ]);

        Producto::create([
            'name' => 'Call Of Duty Black Ops 3',
            'price' => 1082,
            'description' => 'Disponible para PlayStation, Pc y Xbox',
            'image' => 'https://static.wikia.nocookie.net/cod/images/d/d0/Call_of_Duty_Black_Ops_3_wikia.jpg/revision/latest?cb=20150613104137&path-prefix=es',
        ]);

        Producto::create([
            'name' => 'Forza Horizon 5',
            'price' => 1899,
            'description' => 'Disponible para Pc y Xbox',
            'image' => 'https://store-images.s-microsoft.com/image/apps.49800.13718773309227929.bebdcc0e-1ed5-4778-8732-f4ef65a2f445.9ac09d39-064d-466c-81ca-2f1b6f0b95c5'
        ]);

        Producto::create([
            'name' => 'Logitech Hero G502 RGB',
            'price' => 785,
            'description' => 'Mouse gamer con 16000 DPI y 11 botones programables',
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_808797-MLM47618289723_092021-O.jpg'
        ]);

        Producto::create([
            'name' => 'HeadSets Gamer Razer Kraken',
            'price' => 1240,
            'description' => 'Audifonos gamer con cilicona moldeable color verde a 7.1 canales',
            'image' => 'https://m.media-amazon.com/images/I/71BKQhFzDmL._AC_SY450_.jpg'
        ]);

        Producto::create([
            'name' => 'Bundle Teclado + Mouse Gaming Corsair K55',
            'price' => 2450,
            'description' => 'Kit para empesar enlos videojuegos marca corsair, Teclado + Mouse Con luces RGB',
            'image' => 'https://corporaciondash.com/wp-content/uploads/2019/08/gimage_22803.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox One Series X',
            'price' => 13542,
            'description' => 'Consola de videojuegos XBOX Series X',
            'image' => 'https://ss423.liverpool.com.mx/xl/1100132318.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox Onse Series S',
            'price' => 8999,
            'description' => 'Consola de videojuegos XBOX Series S',
            'image' => 'https://gameplanet-53f8.kxcdn.com/media/catalog/Producto/cache/4/image/9df78eab33525d08d6e5fb8d27136e95/s/e/series_s_1_1_1.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox Ones X Gears 5 Edition',
            'price' => 7899,
            'description' => 'Xbox One X Edicion limitada Gears 5',
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_982526-MLA45242877108_032021-O.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox Ones S Gears 4 Edition',
            'price' => 6899,
            'description' => 'Xbox One S Edicion limitada Gears 4',
            'image' => 'https://m.media-amazon.com/images/I/719g3vUqljL._SX466_.jpg'
        ]);

        Producto::create([
            'name' => 'Xbox 360 Gears of War 3 Edition',
            'price' => 5999,
            'description' => 'Xbox 360 Gears of War 3 Edition',
            'image' => 'https://m.media-amazon.com/images/I/719g3vUqljL._SX466_.jpg'
        ]);
    }
}
