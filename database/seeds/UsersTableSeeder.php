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
                'slug' => NULL,
                'password' => '$2y$10$Kae3tFrSOb2m5hDWNS7Rg.TzLKF67BR2JQtkWgbuz5V5riPF6IhGW',
                'remember_token' => NULL,
                'created_at' => '2017-06-29 03:24:38',
                'updated_at' => '2017-06-29 03:24:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sam Adams',
                'email' => 'sam@adamsdavis.com',
                'slug' => NULL,
                'password' => '$2y$10$14iBV8FqQhEjIh8HKLhdkOPIDxni4y6fsUyJpZo6psNdPu/SydB5C',
                'remember_token' => NULL,
                'created_at' => '2017-06-29 03:24:38',
                'updated_at' => '2017-06-29 03:24:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Darren Davis',
                'email' => 'darren@adamsdavis.com',
                'slug' => NULL,
                'password' => '$2y$10$hD3qmdYBX/1jayP33euTc.pNgfMQf6NPanYDknfoHN9ENbAAtQKfC',
                'remember_token' => NULL,
                'created_at' => '2017-06-29 03:24:38',
                'updated_at' => '2017-06-29 03:24:38',
            ),
        ));
        
        
    }
}