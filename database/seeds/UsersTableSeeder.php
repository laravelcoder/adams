<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert([
            0 => [
                'id'             => 1,
                'name'           => 'phillip madsen',
                'email'          => 'wecodelaravel@gmail.com',
                'password'       => '$2y$10$Kae3tFrSOb2m5hDWNS7Rg.TzLKF67BR2JQtkWgbuz5V5riPF6IhGW',
                'remember_token' => null,
                'created_at'     => '2017-06-29 03:24:38',
                'updated_at'     => '2017-06-29 03:24:38'
            ],
            1 => [
                'id'             => 2,
                'name'           => 'Sam Adams',
                'email'          => 'sam@adamsdavis.com',
                'password'       => bcrypt('s@msp@ssw0rd'),
                'remember_token' => null,
                'created_at'     => '2017-06-29 03:24:38',
                'updated_at'     => '2017-06-29 03:24:38'
            ],
            2 => [
                'id'         => 3,
                'name'       => 'Darren Davis',
                'email'      => 'darren@adamsdavis.com',
                'password'   => bcrypt('d@rr3nsp@ssw0rd'),
                'created_at' => '2017-06-29 03:24:38',
                'updated_at' => '2017-06-29 03:24:38'
            ]
        ]);

    }
}
