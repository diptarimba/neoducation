<?php

use Illuminate\Database\Seeder;
use App\Models\Packages;
class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		 $data = [
			['package_name'=> 'SD Private', 'package_price'=> '30000'],
			['package_name'=> 'SD Kelompok 1', 'package_price'=> '20000'],
			['package_name'=> 'SD Kelompok 2', 'package_price'=> '25000'],
			['package_name'=> 'SD Kelompok 3', 'package_price'=> '20000'],
			['package_name'=> 'SMP SMA Private', 'package_price'=> '40000'],
			['package_name'=> 'SMP SMA Kelompok 1', 'package_price'=> '35000'],
			['package_name'=> 'SMP SMA Kelompok 2', 'package_price'=> '30000'],
			['package_name'=> 'SMP SMA Kelompok 3', 'package_price'=> '25000'],
		];
		
		Packages::insert($data); // Eloquent approach
    }
}
