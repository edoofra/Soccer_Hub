<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Soccer_user;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Soccer_user::create([
            'username' => 'Edoofra',
            'password' => md5('edoSoccerHub'),
            'email' => 'edoardo.fra.ef@gmail.com'
        ]);

        Soccer_user::create([
            'username' => 'Marco22',
            'password' => md5('marcoSoccerHub'),
            'email' => 'marco22@gmail.com'
        ]);
    }
}
