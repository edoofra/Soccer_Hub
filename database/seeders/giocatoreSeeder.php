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
            giocatore::factory()->count(10)->create(['user_id'=>$utenti[$i]->id, 'ruolo'=>'A'])->each(function ($giocatore) {
                $dl = new dataLayer();
                $dl->addStatisticheGiocatore($giocatore->id);
            });
            giocatore::factory()->count(10)->create(['user_id'=>$utenti[$i]->id, 'ruolo'=>'C'])->each(function ($giocatore) {
                $dl = new dataLayer();
                $dl->addStatisticheGiocatore($giocatore->id);
            });
            giocatore::factory()->count(10)->create(['user_id'=>$utenti[$i]->id, 'ruolo'=>'D'])->each(function ($giocatore) {
                $dl = new dataLayer();
                $dl->addStatisticheGiocatore($giocatore->id);
            });

        }
    }
}
