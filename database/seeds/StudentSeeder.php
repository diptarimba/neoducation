<?php

use Illuminate\Database\Seeder;
use App\Models\Students;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Malik3152', 'password' => bcrypt('12345678'), 'name' => 'Malik Javas Airlangga' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Rasyid3994', 'password' => bcrypt('12345678'), 'name' => 'Rasyid Ali K' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Talitha3245', 'password' => bcrypt('12345678'), 'name' => 'Talitha Shabir' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Adzkia1265', 'password' => bcrypt('12345678'), 'name' => 'Adzkia Faranisa Adznii' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Ghaani2991', 'password' => bcrypt('12345678'), 'name' => 'Ghaani Reigi Fadhilah' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 1','username' => 'Danu2396', 'password' => bcrypt('12345678'), 'name' => 'Danu Hermansyah' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 1','username' => 'Zeva3712', 'password' => bcrypt('12345678'), 'name' => 'Zeva Alfian Nugroho' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Nizar3257', 'password' => bcrypt('12345678'), 'name' => 'Nizar Al Rafif Ramadhan' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Kayla3727', 'password' => bcrypt('12345678'), 'name' => 'Kayla Nameera Sofian' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Indialmuna1773', 'password' => bcrypt('12345678'), 'name' => 'Indialmuna' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Hibralummah3426', 'password' => bcrypt('12345678'), 'name' => 'Hibralummah' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Gendhis1600', 'password' => bcrypt('12345678'), 'name' => 'Gendhis' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Kesya3946', 'password' => bcrypt('12345678'), 'name' => 'Kesya Ikfina A' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Fenantasya3631', 'password' => bcrypt('12345678'), 'name' => 'Fenantasya Kinan N.' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Rizky3598', 'password' => bcrypt('12345678'), 'name' => 'Rizky Putra F' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Vellun1374', 'password' => bcrypt('12345678'), 'name' => 'Vellun Ercillia Shahzeelawari' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Na3803', 'password' => bcrypt('12345678'), 'name' => 'Na Elda Putri' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Akmal2301', 'password' => bcrypt('12345678'), 'name' => 'Akmal Galih Danish Ziggny' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Sigit3779', 'password' => bcrypt('12345678'), 'name' => 'Sigit Kamal Mubaroq' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Martani2657', 'password' => bcrypt('12345678'), 'name' => 'Martani Akhadiati Sihrahayu' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Rizky2565', 'password' => bcrypt('12345678'), 'name' => 'Rizky Akhamad Hermawan.' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 1','username' => 'Maamar3970', 'password' => bcrypt('12345678'), 'name' => 'Maamar Rafid  Kamil' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 1','username' => 'Regita3656', 'password' => bcrypt('12345678'), 'name' => 'Regita Dian Prabandarin' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Dafianzahna1160', 'password' => bcrypt('12345678'), 'name' => 'Dafianzahna Charusty' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Muhammad3357', 'password' => bcrypt('12345678'), 'name' => 'Muhammad Kenzie' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Kanaya3662', 'password' => bcrypt('12345678'), 'name' => 'Kanaya Nesya' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 2','username' => 'Muhammad3559', 'password' => bcrypt('12345678'), 'name' => 'Muhammad Fariel Attariz' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 2','username' => 'Nabil3762', 'password' => bcrypt('12345678'), 'name' => 'Nabil Pramudiya N' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Fitria3168', 'password' => bcrypt('12345678'), 'name' => 'Fitria Dyah Nurmaola' ],
			['pict_name' => 'default.jpg', 'package' => 'SMP SMA Private','username' => 'Wisnu1911', 'password' => bcrypt('12345678'), 'name' => 'Wisnu Dewa Brata' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Fahmi2574', 'password' => bcrypt('12345678'), 'name' => 'Fahmi Zaenal' ],
			['pict_name' => 'default.jpg', 'package' => 'SMP SMA Private','username' => 'Arsyam1318', 'password' => bcrypt('12345678'), 'name' => 'Arsyam' ],
			['pict_name' => 'default.jpg', 'package' => '','username' => 'Gibran3030', 'password' => bcrypt('12345678'), 'name' => 'Gibran' ],
			['pict_name' => 'default.jpg', 'package' => '','username' => 'Ahmad1281', 'password' => bcrypt('12345678'), 'name' => 'Ahmad Syamil Izzulhaq' ],
			['pict_name' => 'default.jpg', 'package' => '','username' => 'Diera2746', 'password' => bcrypt('12345678'), 'name' => 'Diera Jibran Megantara' ],
			['pict_name' => 'default.jpg', 'package' => '','username' => 'Ayudia3866', 'password' => bcrypt('12345678'), 'name' => 'Ayudia Inara' ],
			['pict_name' => 'default.jpg', 'package' => 'SMP SMA Private','username' => 'Indah2119', 'password' => bcrypt('12345678'), 'name' => 'Indah Rizqy Cahyani' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 2','username' => 'Satria2931', 'password' => bcrypt('12345678'), 'name' => 'Satria' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 2','username' => 'Dewa3782', 'password' => bcrypt('12345678'), 'name' => 'Dewa' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Private','username' => 'Mauren1718', 'password' => bcrypt('12345678'), 'name' => 'Mauren Adeeva Pahlevi' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 2','username' => 'Afnan2327', 'password' => bcrypt('12345678'), 'name' => 'Afnan Abdul Rasyad' ],
			['pict_name' => 'default.jpg', 'package' => 'SD Kelompok 2','username' => 'Afsar3467', 'password' => bcrypt('12345678'), 'name' => 'Afsar Abdul Rasyid' ],
			['pict_name' => 'default.jpg', 'package' => 'SMP SMA Private','username' => 'Najma2512', 'password' => bcrypt('12345678'), 'name' => 'Najma Hafeeza Ashari' ],
			['pict_name' => 'default.jpg', 'package' => 'SMP SMA Private','username' => 'Naufal2955', 'password' => bcrypt('12345678'), 'name' => 'Naufal Muzzy' ],
			['pict_name' => 'default.jpg', 'package' => 'SMP SMA Private','username' => 'Tati1884', 'password' => bcrypt('12345678'), 'name' => 'Tati Handa Yani' ],
			['pict_name' => 'default.jpg', 'package' => '','username' => 'TPA2527', 'password' => bcrypt('12345678'), 'name' => 'TPA Al- Madani' ],
			['pict_name' => 'default.jpg', 'package' => 'SMP SMA Private','username' => 'Rayhan2256', 'password' => bcrypt('12345678'), 'name' => 'Rayhan Nur Alfian' ]

		];
		
		Students::insert($data);
    }
}
