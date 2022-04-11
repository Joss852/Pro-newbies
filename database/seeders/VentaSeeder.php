<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ventas;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $dato = [
           array('nombre' => 'GTA V', 'descripcion' => 'Juego de GTA V', 'costo' => '499','n_ventas' => 1500),
           array('nombre' => 'Mario bros', 'descripcion' => 'Juego de Mario', 'costo' => '799','n_ventas' => 2000),
           array('nombre' => 'Office 2022', 'descripcion' => 'Juego de Office 2022', 'costo' => '1999','n_ventas' => 1670),
           array('nombre' => 'Fifa 22', 'descripcion' => 'Juego de Fifa 22', 'costo' => '1099','n_ventas' => 1890),
           array('nombre' => 'LOL', 'descripcion' => 'Juego de LOL', 'costo' => '2950','n_ventas' => 1490),
           array('nombre' => 'Mario Carritos', 'descripcion' => 'Juego de Mario', 'costo' => '999','n_ventas' => 1900),
           array('nombre' => 'Crahs', 'descripcion' => 'Juego de Crash', 'costo' => '950','n_ventas' => 1900),
           array('nombre' => 'Minecraft', 'descripcion' => 'Juego de Minecraft', 'costo' => '850','n_ventas' => 950),
           array('nombre' => 'ELDEN RING', 'descripcion' => 'Juego de RING', 'costo' => '850','n_ventas' => 680),
           array('nombre' => 'Halo', 'descripcion' => 'Juego de Halo', 'costo' => '877','n_ventas' => 3001),
           array('nombre' => 'Forza', 'descripcion' => 'Juego de Forza', 'costo' => '1299','n_ventas' => 5500)
           
           

       ];
       Ventas::insert($dato);
    }
}
