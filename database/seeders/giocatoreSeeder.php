<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\GiocatoreFactory;
use App\Models\giocatore;
use App\Models\dataLayer;

class giocatoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dl = new dataLayer();
        $utenti = $dl->listUsers();

        for ($i = 0; $i < count($utenti); $i++) {
            $values_attaccante[$i] = $dl->createValuesForAttaccante();
            giocatore::factory()->count(10)->create(['user_id' => $utenti[$i]->id, 'ruolo' => 'A','partite_giocate' => $values_attaccante['partite'],
                'gol' => $values_attaccante['gol'],'assist' => $values_attaccante['assist'], 'clean_sheet' => $values_attaccante['clean_sheets'],
                'ammonizioni' => $values_attaccante['ammonizioni'],'espulsioni' => $values_attaccante['espulsioni'],'tiri_tentati' => $values_attaccante['tiri_tentati'],
                'tiri_in_porta' => $values_attaccante['tiri_in_porta'],'passaggi_tentati' => $values_attaccante['passaggi_tentati'],
                'passaggi_completati' => $values_attaccante['passaggi_completati'],'contrasti_tentati' => $values_attaccante['contrasti_tentati'],
                'contrasti_vinti' => $values_attaccante['contrasti_completati'],'stipendio' => $values_attaccante['stipendio'],'valore_mercato' => $values_attaccante['valore'],
                'scadenza_contratto' => $values_attaccante['data_scadenza']]);
        }
    }
}
