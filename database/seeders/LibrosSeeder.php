<?php

namespace Database\Seeders;
use App\Models\libros;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $hw = new libros();
        $hw->titulo = "la guerra de los cielos";
        $hw->autor = "Cesar Garcia";
        $hw->editorial = "Kindle";
        $hw->fechaPublicacion = "2014-06-20";
        $hw->numeroPaginas = 488;
        $hw->save();
        $hw2 = new libros();
        $hw2->titulo = "Bajo un cielo escarlata";
        $hw2->autor = "Mark Sullivan";
        $hw2->editorial = "Suma";
        $hw2->fechaPublicacion = "2019-03-20";
        $hw2->numeroPaginas = 576;
        $hw2->save();
        */
        libros::factory(100)->create();
    }
}
