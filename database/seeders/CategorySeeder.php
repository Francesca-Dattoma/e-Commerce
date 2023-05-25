<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [  
                'name' => 'Auto, moto e altri veicoli',
                'slug' => 'Auto-moto-e-altri-veicoli',          
            ],
            [  
                'name' => 'Ricambi e accessori per auto e moto',
                'slug' => 'ricambi-e-accessori-per-auto-e-moto'          
            ],
            [  
                'name' => 'Immobili',
                'slug' => 'immobili'          
            ],
            [  
                'name' => 'Articoli di arte e antiquariato',
                'slug' => 'articoli-di-arte-e-antiquariato'          
            ],
            [  
                'name' => 'Articoli per animali',
                'slug' => 'articoli-per-animali'          
            ],
            [  
                'name' => 'Giocattoli e modellismo',
                'slug' => 'giocattoli-e-modellismo'          
            ],
            [  
                'name' => 'Fumetti, manga e memorabilia',
                'slug' => 'fumetti-manga-e-memorabilia'          
            ],
            [  
                'name' => "Articoli per il giardino e l'arredamento di esterni",
                'slug' => 'articoli-per-il-giardino-e-larredamento-di-esterni'          
            ],
            [  
                'name' => "Videogiochi e console",
                'slug' => 'videogiochi-e-console'          
            ],
            [  
                'name' => "TV, audio e video",
                'slug' => 'tv-audio-e-video'          
            ],
            [  
                'name' => "Arredamento e bricolage per la casa",
                'slug' => 'arredamento-e-bricolage-per-la-casa'          
            ],
            [  
                'name' => "Strumenti musicali",
                'slug' => 'strumenti-musicali'          
            ],
            [  
                'name' => "Libri e riviste",
                'slug' => 'libri-e-riviste'          
            ],
            [  
                'name' => "Abbigliamento e accessori",
                'slug' => 'abbigliamento-e-accessori'          
            ],
            [  
                'name' => "Fotografia e video",
                'slug' => 'fotografia-e-video'          
            ],
            [  
                'name' => "Articoli per hobby creativi",
                'slug' => 'articoli-per-hobby-creativi'          
            ],
            [  
                'name' => "Informatica",
                'slug' => 'informatica'          
            ],
            [  
                'name' => "Elettrodomestici",
                'slug' => 'elettrodomestici'          
            ],
            [  
                'name' => "Articoli per la bellezza e la salute",
                'slug' => 'articoli-per-la-bellezza-e-la-salute'          
            ],
            [  
                'name' => "Musica, CD e vinili",
                'slug' => 'musica-cd-e-vinili'          
            ],
            [  
                'name' => "Orologi e gioielli",
                'slug' => 'orologi-e-gioielli'          
            ],
            [  
                'name' => "Articoli da collezione",
                'slug' => 'articoli-da-collezione'          
            ],
            [  
                'name' => "Cibi e bevande",
                'slug' => 'cibi-e-bevande'          
            ],
            [  
                'name' => "Articoli per commercio, ufficio e industria",
                'slug' => 'articoli-per-commercio-ufficio-e-industria'          
            ],
            [  
                'name' => "Articoli per infanzia e premaman",
                'slug' => 'articoli-per-infanzia-e-premaman'          
            ],
            [  
                'name' => "Sport e viaggi",
                'slug' => 'sport-e-viaggi'          
            ],
            [  
                'name' => "Francobolli",
                'slug' => 'francobolli'          
            ],


        ]);
    }
}
