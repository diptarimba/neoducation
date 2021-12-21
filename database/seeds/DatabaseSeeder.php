<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(PackageSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TentorSeeder::class);
    }
}
