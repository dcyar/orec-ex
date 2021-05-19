<?php

namespace Database\Seeders;

use App\Entities\Phrase;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhrasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phrases = [
    		[
    			'frase' => 'La parte más fuerte de una persona es su alma, donde se encuentran el amor y la perseverancia',
    			'autor' => 'Anónimo'
    		],
    		[
    			'frase' => 'Quizás no siempre seamos ganadores. Pero no somos perezosos. Tomamos riesgos, vamos a por todas, saltamos las vallas. Y a veces triunfamos.',
    			'autor' => 'Kilian Jornet'
			],
			[
    			'frase' => 'Deberíamos tener el coraje de seguir al corazón y a la intuición. De algún modo, ellos saben lo que realmente queremos ser.',
    			'autor' => 'Steve Jobs'
			],
			[
    			'frase' => 'Creo que cualquier cosa es posible si tienes la mentalidad, voluntad y deseo para hacerlo y dedicarle tiempo',
    			'autor' => 'Roger Clemes'
    		],
			[
    			'frase' => 'Los mejores doctores del mundo son: El Dr. Alegría y el Dr. Tranquilidad.',
    			'autor' => 'Jonathan Swift'
    		],
			[
    			'frase' => 'La esencia de la vida no está en las grandes victorias y los grandes fracasos, sino en las simples alegrías.',
    			'autor' => 'Jonathan Lockwood Huie'
    		],
			[
    			'frase' => 'El más desaprovechado de todos los días es uno sin risa.',
    			'autor' => 'Nicolas Chamfort'
    		],
			[
    			'frase' => 'Hoy es un buen momento para decirle te quiero a las personas especiales de tu vida.',
    			'autor' => 'Jhon Achata'
			],
    	];

    	foreach ($phrases as $item){
	        DB::table('phrases')->insert([
	            'frase' => $item['frase'],
	            'autor' => $item['autor'],
	        ]);
        }
    }
}
