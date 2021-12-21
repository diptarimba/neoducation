<?php

use Illuminate\Database\Seeder;
use App\Models\Admins;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['username'=>'admin', 'password'=> bcrypt('admin'), 'name' => 'Default Admin'],
		];
		
		Admins::insert($data); // Eloquent approach
    }
}
