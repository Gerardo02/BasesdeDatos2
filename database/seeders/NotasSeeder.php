<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'titulo' => 'Para que sirve composer?',
            'contenido' => 'Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony, así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.',

        ]);

        DB::table('notas')->insert([
            'titulo' => 'Instalación de Laravel',
            'contenido' => File::get(__DIR__.'/notas/install.html')
            
        ]);
        DB::table('notas')->insert([
            'titulo' => 'Rutas y JSON',
            'contenido' => File::get(__DIR__.'/notas/rutas.html')
            
        ]);
        DB::table('notas')->insert([
            'titulo' => 'Front Controller',
            'contenido' => File::get(__DIR__.'/notas/front.html')
            
        ]);
        DB::table('notas')->insert([
            'titulo' => 'Cambia el formato de parametros dinamicos',
            'contenido' => File::get(__DIR__.'/notas/cambia.html')
            
        ]);
    }
}