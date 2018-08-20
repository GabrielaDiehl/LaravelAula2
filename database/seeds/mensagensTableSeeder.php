<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'Prova de Matemática',
            'texto' => 'Prova sobre números imaginários',
            'autor' => 'Gabi'
        ]);

        Mensagem::create([
            'titulo' => 'Prova de Portugues',
            'texto' => 'Prova sobre palavras imaginários',
            'autor' => 'Gabi'
        ]);

        Mensagem::create([
            'titulo' => 'Prova de Quimica',
            'texto' => 'Prova sobre compostos imaginários',
            'autor' => 'Gabi'
        ]);

        Mensagem::create([
            'titulo' => 'Prova de Biologia',
            'texto' => 'Prova sobre animais imaginários',
            'autor' => 'Gabi'
        ]);

    }
}
