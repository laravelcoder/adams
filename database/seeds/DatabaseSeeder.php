<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(LawyersTableSeeder::class);
        // $this->call(StaffTableSeeder::class);

        factory(App\Models\Post::class, 3)->create();
    }
}
