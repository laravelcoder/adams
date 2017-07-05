<?php

use Illuminate\Database\Seeder;

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
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'phillip madsen',
                'email' => 'wecodelaravel@gmail.com',
                'password' => '$2y$10$Kae3tFrSOb2m5hDWNS7Rg.TzLKF67BR2JQtkWgbuz5V5riPF6IhGW',
                'remember_token' => NULL,
                'created_at' => '2017-06-29 03:24:38',
                'updated_at' => '2017-06-29 03:24:38',
            ),
        ));
        
        
    }
}