<?php

use Illuminate\Database\Seeder;
use App\Models\Tentors;
class TentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['mapel' => 'Bahasa Inggris SMA', 'pict_name' => 'default.jpg','uniqueid' => 'A1','name' => 'Zauharatul Auliya Asrofah', 'username' => 'Zauharatul1968', 'password' => bcrypt('12345678')],
			['mapel' => 'Bahasa Inggris SMA', 'pict_name' => 'default.jpg','uniqueid' => 'A2','name' => 'Linda Listiawati', 'username' => 'Linda1275', 'password' => bcrypt('12345678')],
			['mapel' => 'Bahasa Inggris SMA', 'pict_name' => 'default.jpg','uniqueid' => 'A3','name' => 'Kurnia Khikmayanti Elfira', 'username' => 'Kurnia1340', 'password' => bcrypt('12345678')],
			['mapel' => 'Bahasa Inggris SMA', 'pict_name' => 'default.jpg','uniqueid' => 'A4','name' => 'Nur Fatimah', 'username' => 'Nur1817', 'password' => bcrypt('12345678')],
			['mapel' => 'Bahasa Inggris SMA', 'pict_name' => 'default.jpg','uniqueid' => 'A5','name' => 'Evita Kamalia', 'username' => 'Evita1501', 'password' => bcrypt('12345678')],
			['mapel' => 'Bahasa Inggris SMA', 'pict_name' => 'default.jpg','uniqueid' => 'A6','name' => 'Intan Nasiha', 'username' => 'Intan1266', 'password' => bcrypt('12345678')],
			['mapel' => 'Matematika SMA', 'pict_name' => 'default.jpg','uniqueid' => 'B1','name' => 'Rini Anggun Siti Fatimah ', 'username' => 'Rini1775', 'password' => bcrypt('12345678')],
			['mapel' => 'Matematika SMA', 'pict_name' => 'default.jpg','uniqueid' => 'B2','name' => 'Wulan Fitriana', 'username' => 'Wulan1406', 'password' => bcrypt('12345678')],
			['mapel' => 'Matematika SMA', 'pict_name' => 'default.jpg','uniqueid' => 'B3','name' => 'Atika ', 'username' => 'Atika1151', 'password' => bcrypt('12345678')],
			['mapel' => 'Ekonomi SMA', 'pict_name' => 'default.jpg','uniqueid' => 'C1','name' => 'Ayu Syahbani', 'username' => 'Ayu1597', 'password' => bcrypt('12345678')],
			['mapel' => 'Biologi SMA', 'pict_name' => 'default.jpg','uniqueid' => 'D1','name' => 'Erfanda RA', 'username' => 'Erfanda1002', 'password' => bcrypt('12345678')],
			['mapel' => 'Biologi SMA', 'pict_name' => 'default.jpg','uniqueid' => 'D2','name' => 'Mutammimah ', 'username' => 'Mutammimah1775', 'password' => bcrypt('12345678')],
			['mapel' => 'Biologi SMP', 'pict_name' => 'default.jpg','uniqueid' => 'D3','name' => 'Ayu Nawang Wulan', 'username' => 'Ayu1298', 'password' => bcrypt('12345678')],
			['mapel' => 'Kimia SMA', 'pict_name' => 'default.jpg','uniqueid' => 'E1','name' => 'Handy Razie Dharmawan', 'username' => 'Handy1589', 'password' => bcrypt('12345678')],
			['mapel' => 'Kimia SMA', 'pict_name' => 'default.jpg','uniqueid' => 'E2','name' => 'Nining Istiqomah', 'username' => 'Nining1235', 'password' => bcrypt('12345678')],
			['mapel' => 'Kimia SMA', 'pict_name' => 'default.jpg','uniqueid' => 'E3','name' => 'Fernanda Aristiya', 'username' => 'Fernanda1771', 'password' => bcrypt('12345678')],
			['mapel' => 'Kimia SMA', 'pict_name' => 'default.jpg','uniqueid' => 'E4','name' => 'Diah Ayu Saputri ', 'username' => 'Diah1182', 'password' => bcrypt('12345678')],
			['mapel' => 'Fisika SMA', 'pict_name' => 'default.jpg','uniqueid' => 'F1','name' => 'Septi Afriyani', 'username' => 'Septi1475', 'password' => bcrypt('12345678')],
			['mapel' => 'Fisika SMA', 'pict_name' => 'default.jpg','uniqueid' => 'F2','name' => 'Rizki Winarsih', 'username' => 'Rizki1219', 'password' => bcrypt('12345678')],
			['mapel' => 'Fisika SMA', 'pict_name' => 'default.jpg','uniqueid' => 'F3','name' => 'Umu Saadah', 'username' => 'Umu1078', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G1','name' => 'Ulfatur Rohmah', 'username' => 'Ulfatur1130', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G2','name' => 'Lulu Lailatul Izzah', 'username' => 'Lulu1493', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G3','name' => 'Rifqiyatun Nihayah', 'username' => 'Rifqiyatun1623', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G4','name' => 'Maulida ', 'username' => 'Maulida1884', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G5','name' => 'Intan Ayu Agustina', 'username' => 'Intan1264', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G6','name' => 'Nita Listiyani', 'username' => 'Nita1292', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G7','name' => 'Rusdiyanah ', 'username' => 'Rusdiyanah1599', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G8','name' => 'Akhmad Nur Fauzan', 'username' => 'Akhmad1370', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G9','name' => 'Suhelin Setiyaningsih', 'username' => 'Suhelin1041', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G10','name' => 'Regina Alma', 'username' => 'Regina1027', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G11','name' => 'Isrokhotun Nofipah', 'username' => 'Isrokhotun1620', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G12','name' => 'Wiwin Setiyaningsih', 'username' => 'Wiwin1277', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G13','name' => 'Amin Arifin ', 'username' => 'Amin1129', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G14','name' => 'Nela Listiana', 'username' => 'Nela1353', 'password' => bcrypt('12345678')],
			['mapel' => 'Tematik SD', 'pict_name' => 'default.jpg','uniqueid' => 'G15','name' => 'Inggit Septyaningrum', 'username' => 'Inggit1889', 'password' => bcrypt('12345678')],
			['mapel' => 'Tahsin', 'pict_name' => 'default.jpg','uniqueid' => 'H1','name' => 'Siti Fatimah', 'username' => 'Siti1705', 'password' => bcrypt('12345678')],
			['mapel' => 'Tahsin', 'pict_name' => 'default.jpg','uniqueid' => 'H2','name' => 'Rofiqorun Hasanah', 'username' => 'Rofiqorun1000', 'password' => bcrypt('12345678')],
			['mapel' => 'Tahsin', 'pict_name' => 'default.jpg','uniqueid' => 'H3','name' => 'Muhammad Salim', 'username' => 'Muhammad1322', 'password' => bcrypt('12345678')],
			['mapel' => 'Tahsin', 'pict_name' => 'default.jpg','uniqueid' => 'H4','name' => 'Masngidatul Hikmah', 'username' => 'Masngidatul1361', 'password' => bcrypt('12345678')],
			['mapel' => 'Tahsin', 'pict_name' => 'default.jpg','uniqueid' => 'H5','name' => 'Endah Tri Setiani ', 'username' => 'Endah1576', 'password' => bcrypt('12345678')],
			['mapel' => 'Tahsin', 'pict_name' => 'default.jpg','uniqueid' => 'H6','name' => 'Siti Maghfiroh ', 'username' => 'Siti1690', 'password' => bcrypt('12345678')],
			['mapel' => 'Tahsin', 'pict_name' => 'default.jpg','uniqueid' => 'H7','name' => 'Ina Faturoh Khikha', 'username' => 'Ina1221', 'password' => bcrypt('12345678')],




		];
		
		Tentors::insert($data);
		
    }
}
