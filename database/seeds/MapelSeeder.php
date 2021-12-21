<?php

use Illuminate\Database\Seeder;
use App\Models\Mapels;
class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
			['name_mapel' => 'Bahasa Inggris SD', 'uniqueid_mapel' => 'A'],
			['name_mapel' => 'Bahasa Inggris SMP', 'uniqueid_mapel' => 'A'],
			['name_mapel' => 'Bahasa Inggris SMA', 'uniqueid_mapel' => 'A'],
			['name_mapel' => 'Matematika SD', 'uniqueid_mapel' => 'B'],
			['name_mapel' => 'Matematika SMP', 'uniqueid_mapel' => 'B'],
			['name_mapel' => 'Matematika SMA', 'uniqueid_mapel' => 'B'],
			['name_mapel' => 'Ekonomi SMA', 'uniqueid_mapel' => 'C'],
			['name_mapel' => 'Biologi SMP', 'uniqueid_mapel' => 'D'],
			['name_mapel' => 'Biologi SMA', 'uniqueid_mapel' => 'D'],
			['name_mapel' => 'Kimia SMP', 'uniqueid_mapel' => 'E'],
			['name_mapel' => 'Kimia SMA', 'uniqueid_mapel' => 'E'],
			['name_mapel' => 'Fisika SMA', 'uniqueid_mapel' => 'F'],
			['name_mapel' => 'Fisika SMP', 'uniqueid_mapel' => 'F'],
			['name_mapel' => 'Tematik SD', 'uniqueid_mapel' => 'G'],
			['name_mapel' => 'Tahsin', 'uniqueid_mapel' => 'H'],
			['name_mapel' => 'Tahfidz', 'uniqueid_mapel' => 'H'],
		];
	
		Mapels::insert($data); // Eloquent approach
    }
}
