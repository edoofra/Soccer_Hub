<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\giocatore_top;

class giocatore_top_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        giocatore_top::create([
            'nome' => 'Cristiano',
            'cognome' => 'Ronaldo',
            'squadra' => 'Manchester United',
            'valore_principale' => '24',
            'ruolo' => 'A',
            'rank' => '1'
        ]);

        giocatore_top::create([
            'nome' => 'Lionel',
            'cognome' => 'Messi',
            'squadra' => 'Paris Saint Germain',
            'valore_principale' => '11',
            'ruolo' => 'A',
            'rank' => '2'
        ]);

        giocatore_top::create([
            'nome' => 'Karim',
            'cognome' => 'Benzema',
            'squadra' => 'Real Madrid',
            'valore_principale' => '42',
            'ruolo' => 'A',
            'rank' => '3'
        ]);

        giocatore_top::create([
            'nome' => 'Kylian',
            'cognome' => 'Mbappè',
            'squadra' => 'Paris Saint Germain',
            'valore_principale' => '36',
            'ruolo' => 'A',
            'rank' => '4'
        ]);

        giocatore_top::create([
            'nome' => 'Robert',
            'cognome' => 'Lewandowski',
            'squadra' => 'Bayern Munich',
            'valore_principale' => '50',
            'ruolo' => 'A',
            'rank' => '5'
        ]);

        giocatore_top::create([
            'nome' => 'Mohamed',
            'cognome' => 'Salah',
            'squadra' => 'Liverpool',
            'valore_principale' => '30',
            'ruolo' => 'A',
            'rank' => '6'
        ]);

        giocatore_top::create([
            'nome' => 'Erling',
            'cognome' => 'Haaland',
            'squadra' => 'Manchester City',
            'valore_principale' => '29',
            'ruolo' => 'A',
            'rank' => '7'
        ]);

        giocatore_top::create([
            'nome' => 'Dusan',
            'cognome' => 'Vlahovic',
            'squadra' => 'Juventus',
            'valore_principale' => '29',
            'ruolo' => 'A',
            'rank' => '8'
        ]);

        giocatore_top::create([
            'nome' => 'Sadio',
            'cognome' => 'Mané',
            'squadra' => 'Liverpool',
            'valore_principale' => '22',
            'ruolo' => 'A',
            'rank' => '9'
        ]);

        giocatore_top::create([
            'nome' => 'Neymar',
            'cognome' => 'Jr',
            'squadra' => 'Paris Saint Germain',
            'valore_principale' => '12',
            'ruolo' => 'A',
            'rank' => '10'
        ]);

        giocatore_top::create([
            'nome' => 'Luka',
            'cognome' => 'Modric',
            'squadra' => 'Real Madrid',
            'valore_principale' => '12',
            'ruolo' => 'C',
            'rank' => '1'
        ]);

        giocatore_top::create([
            'nome' => 'Kevin',
            'cognome' => 'De Bruyne',
            'squadra' => 'Manchester City',
            'valore_principale' => '13',
            'ruolo' => 'C',
            'rank' => '2'
        ]);

        giocatore_top::create([
            'nome' => 'Marco',
            'cognome' => 'Verratti',
            'squadra' => 'Paris Saint Germain',
            'valore_principale' => '4',
            'ruolo' => 'C',
            'rank' => '3'
        ]);

        giocatore_top::create([
            'nome' => 'Paul',
            'cognome' => 'Pogba',
            'squadra' => 'Manchester United',
            'valore_principale' => '10',
            'ruolo' => 'C',
            'rank' => '4'
        ]);

        giocatore_top::create([
            'nome' => 'Ngolo',
            'cognome' => 'Kantè',
            'squadra' => 'Chelsea',
            'valore_principale' => '6',
            'ruolo' => 'C',
            'rank' => '5'
        ]);

        giocatore_top::create([
            'nome' => 'Casemiro',
            'cognome' => '',
            'squadra' => 'Real Madrid',
            'valore_principale' => '4',
            'ruolo' => 'C',
            'rank' => '6'
        ]);

        giocatore_top::create([
            'nome' => 'Frenkie',
            'cognome' => 'De Jong',
            'squadra' => 'Barcelona',
            'valore_principale' => '5',
            'ruolo' => 'C',
            'rank' => '7'
        ]);

        giocatore_top::create([
            'nome' => 'Phil',
            'cognome' => 'Foden',
            'squadra' => 'Manchester City',
            'valore_principale' => '11',
            'ruolo' => 'C',
            'rank' => '8'
        ]);

        giocatore_top::create([
            'nome' => 'Jorginho',
            'cognome' => '',
            'squadra' => 'Chelsea',
            'valore_principale' => '4',
            'ruolo' => 'C',
            'rank' => '9'
        ]);

        giocatore_top::create([
            'nome' => 'Nicolò',
            'cognome' => 'Barella',
            'squadra' => 'Inter',
            'valore_principale' => '12',
            'ruolo' => 'C',
            'rank' => '10'
        ]);

        giocatore_top::create([
            'nome' => 'Virgil',
            'cognome' => 'Van Dijk',
            'squadra' => 'Liverpool',
            'valore_principale' => '21',
            'ruolo' => 'D',
            'rank' => '1'
        ]);

        giocatore_top::create([
            'nome' => 'Antonio',
            'cognome' => 'Rudiger',
            'squadra' => 'Chelsea',
            'valore_principale' => '14',
            'ruolo' => 'D',
            'rank' => '2'
        ]);

        giocatore_top::create([
            'nome' => 'Matthijs',
            'cognome' => 'De Ligt',
            'squadra' => 'Juventus',
            'valore_principale' => '11',
            'ruolo' => 'D',
            'rank' => '3'
        ]);

        giocatore_top::create([
            'nome' => 'Giorgio',
            'cognome' => 'Chiellini',
            'squadra' => 'JUventus',
            'valore_principale' => '11',
            'ruolo' => 'D',
            'rank' => '4'
        ]);

        giocatore_top::create([
            'nome' => 'Leonardo',
            'cognome' => 'Bonucci',
            'squadra' => 'Juventus',
            'valore_principale' => '11',
            'ruolo' => 'D',
            'rank' => '5'
        ]);

        giocatore_top::create([
            'nome' => 'Sergio',
            'cognome' => 'Ramos',
            'squadra' => 'Paris Saint Germain',
            'valore_principale' => '4',
            'ruolo' => 'D',
            'rank' => '6'
        ]);

        giocatore_top::create([
            'nome' => 'Joao',
            'cognome' => 'Cancelo',
            'squadra' => 'Manchester City',
            'valore_principale' => '19',
            'ruolo' => 'D',
            'rank' => '7'
        ]);

        giocatore_top::create([
            'nome' => 'Trent',
            'cognome' => 'Alexander-Arnold',
            'squadra' => 'Liverpool',
            'valore_principale' => '5',
            'ruolo' => 'D',
            'rank' => '8'
        ]);

        giocatore_top::create([
            'nome' => 'Alessandro',
            'cognome' => 'Bastoni',
            'squadra' => 'Inter',
            'valore_principale' => '8',
            'ruolo' => 'D',
            'rank' => '9'
        ]);

        giocatore_top::create([
            'nome' => 'Theo',
            'cognome' => 'Hernandez',
            'squadra' => 'Milan',
            'valore_principale' => '10',
            'ruolo' => 'D',
            'rank' => '10'
        ]);
    }
}
