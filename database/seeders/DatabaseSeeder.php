<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gejala;
use App\Models\GejalaPenyakit;
use App\Models\Penyakit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        Gejala::create([
            'kode' => "G1",
            'deskripsi' => "Menghindari pikiran tentang peristiwa traumatis" 
        ]);
        Gejala::create([
            'kode' => "G2",
            'deskripsi' => "Menghindari pembicaraan mengenai peristiwa traumatis" 
        ]);
        Gejala::create([
            'kode' => "G3",
            'deskripsi' => "Menghindari tempat atau kegiatan yang mengingatkan traumatis" 
        ]);
        Gejala::create([
            'kode' => "G4",
            'deskripsi' => "Mudah merasa cemas atau panik untuk keadaan yang belum tentu terjadi" 
        ]);
        Gejala::create([
            'kode' => "G5",
            'deskripsi' => "Kesulitan dalam mengambil sebuah keputusan" 
        ]);
        Gejala::create([
            'kode' => "G6",
            'deskripsi' => "Kesulitan dalam mempertahankan hubungan dekat dengan seseorang (sulit akrab)" 
        ]);
        Gejala::create([
            'kode' => "G7",
            'deskripsi' => "Sering merasa malu ketika berinteraksi dengan orangg lain atau melakukan suatu hal" 
        ]);
        Gejala::create([
            'kode' => "G8",
            'deskripsi' => "Sering merasa bimbang (dalam permasalahan yang dialami)" 
        ]);
        Gejala::create([
            'kode' => "G9",
            'deskripsi' => "Mudah lupa terhadap suatu hal atau dalam hal apapun" 
        ]);
        Gejala::create([
            'kode' => "G10",
            'deskripsi' => "Kehilangan selera makan" 
        ]);
        Gejala::create([
            'kode' => "G11",
            'deskripsi' => "Kehilangan rasa percaya diri" 
        ]);
        Gejala::create([
            'kode' => "G12",
            'deskripsi' => "Merasa kesulitan untuk tidur" 
        ]);
        Gejala::create([
            'kode' => "G13",
            'deskripsi' => "Sulit dalam berkonsentrasi" 
        ]);
        Gejala::create([
            'kode' => "G14",
            'deskripsi' => "Merasa takut yang berlebihan (dalam hal atau keadaan apapun)" 
        ]);
        Gejala::create([
            'kode' => "G15",
            'deskripsi' => "Tiba tiba menangis" 
        ]);
        Gejala::create([
            'kode' => "G16",
            'deskripsi' => "Mudah pesimis (selalu memikirkan kemungkinan terburuk akan suatu hal, seperti khawatir, celaka, dll)" 
        ]);
        Gejala::create([
            'kode' => "G17",
            'deskripsi' => "Mudah merasa lelah" 
        ]);
        Gejala::create([
            'kode' => "G18",
            'deskripsi' => "Mengalami peristiwa traumatis seperti bullying (penindasan/perundungan yang dilakukan dengan sengaja dimasa lampau maupun sekarang)" 
        ]);
        Gejala::create([
            'kode' => "G19",
            'deskripsi' => "Mengalami peristiwa traumatis seperti peristiwa yang mengancam diri anda (kejahatan atau mengakiti diri sendiri)" 
        ]);
        Gejala::create([
            'kode' => "G20",
            'deskripsi' => "Mengalami peristiwa traumatis seperti mengalami kekerasan dalam hidup anda (seperti kekerasan dalam keluarga atau lingkungan anda)" 
        ]);
        Gejala::create([
            'kode' => "G21",
            'deskripsi' => "Mengalami ingatan menyakitkan yang terjadi secara berulang tentang peristiwa traumatis" 
        ]);
        Gejala::create([
            'kode' => "G22",
            'deskripsi' => "Mengalami mimpi buruk tentang peristiwa traumatis" 
        ]);
        Gejala::create([
            'kode' => "G23",
            'deskripsi' => "Merasa curiga atau was was berlebihan terhadap suatu hal (kepada teman, keluarga, atau orang lain)" 
        ]);
        Gejala::create([
            'kode' => "G24",
            'deskripsi' => "Memiliki keinginan untuk mengakhiri hidup atau melakukan bunuh diri" 
        ]);
        Gejala::create([
            'kode' => "G25",
            'deskripsi' => "Kehilangan minat terhadap semua hal (seperti belajar, hobi, makan, dll.)" 
        ]);
        Gejala::create([
            'kode' => "G26",
            'deskripsi' => "Mengalami peristiwa traumatis seperti kecelakaan lalu lintas/bencana alam (seperti takut mengendarai motor ketika hujan)" 
        ]);
        Gejala::create([
            'kode' => "G27",
            'deskripsi' => "Berhalusinasi dan berilusi" 
        ]);
        Gejala::create([
            'kode' => "G28",
            'deskripsi' => "Mudah merasa putus asa" 
        ]);
        Gejala::create([
            'kode' => "G29",
            'deskripsi' => "Kehilangan Makna Hidup" 
        ]);
        Gejala::create([
            'kode' => "G30",
            'deskripsi' => "Mudah histeria (emosi yang tidak terkendali)" 
        ]);

        Penyakit::create([
            'kode' => "KA",
            'kriteria' => "Stressor",
            'deskripsi_penyakit' => "Anda merasakan langsung kejadian tersebut, anda menyaksikan sendiri sesuatu yang buruk terjadi pada orang lain Anda mendengar cerita detail langsung dari saudara atau teman dekat yang mengalami kejadian traumatis tersebut ,anda adalah orang terpapar langsung detail kejadian berulang kali, misalnya orang yang mengumpulkan potongan tubuh dari tempat kejadian atau orang yang menerima detail kekerasan pada anak."
        ]);
        Penyakit::create([
            'kode' => "KB",
            'kriteria' => "Gejala Intrusi",
            'deskripsi_penyakit' => "Anda merasakan langsung kejadian tersebut, anda menyaksikan sendiri sesuatu yang buruk terjadi pada orang lain Anda mendengar cerita detail langsung dari saudara atau teman dekat yang mengalami kejadian traumatis tersebut ,anda adalah orang terpapar langsung detail kejadian berulang kali, misalnya orang yang mengumpulkan potongan tubuh dari tempat kejadian atau orang yang menerima detail kekerasan pada anak."
        ]);
        Penyakit::create([
            'kode' => "KC",
            'kriteria' => "menghindar",
            'deskripsi_penyakit' => "Menghindari pemikiran yang berhubungan dengan kejadian traumatis, menghindari hal yang mengingatkan dengan kejadian traumatis, seperti orang, tempat, aktivitas, dan objek."
        ]);
        Penyakit::create([
            'kode' => "KD",
            'kriteria' => "Perubahan Suasana Hati",
            'deskripsi_penyakit' => "Tidak mampu untuk mengingat pokok masalah dari kejadian traumatis, mengalami perasaan negatif yang persisten, misal menganggap semua orang jahat atau diri sendiri adalah orang yang gagal, merasakan emosi negatif terus menerus termasuk ketakutan, marah, bersalah, atau malu, menganggap semua kegiatan tidak menyenangkan Tidak bisa merasakan perasaan yang menyenangkan, seperti bahagia dan cinta."
        ]);
        Penyakit::create([
            'kode' => "KE",
            'kriteria' => "Perubahan gairah dan reaktivitas",
            'deskripsi_penyakit' => "Perilaku agresif Perilaku menyiksa diri sendiri, merasa selalu dalam bahaya, kesulitan berkonsentrasi, gangguan tidur"
        ]);
        Penyakit::create([
            'kode' => "KF",
            'kriteria' => "Durasi 1 bulan",
            'deskripsi_penyakit' => "Mengalami gejala kriteria B, C, D, dan E lebih dari 1 bulan."
        ]);
        Penyakit::create([
            'kode' => "KG",
            'kriteria' => "Signifikan Fungsional",
            'deskripsi_penyakit' => "Gejala mempengaruhi hidup, seperti pekerjaan dan kehidupan sosial."
        ]);
        Penyakit::create([
            'kode' => "KH",
            'kriteria' => "Eksklusi",
            'deskripsi_penyakit' => "Gangguan bukan disebabkan konsumsi obat-obatan atau penyakit lain."
        ]);
        
        GejalaPenyakit::create([
            'gejala_id' => 18,
            'penyakit_id' =>1 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 19,
            'penyakit_id' =>1 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 20,
            'penyakit_id' =>1 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 21,
            'penyakit_id' =>1 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 4,
            'penyakit_id' =>2 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 14,
            'penyakit_id' =>2 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 22,
            'penyakit_id' =>2 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 27,
            'penyakit_id' =>2 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 27,
            'penyakit_id' =>2 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 1,
            'penyakit_id' =>3 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 2,
            'penyakit_id' =>3 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 3,
            'penyakit_id' =>3 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 6,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 7,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 8,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 9,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 11,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 14,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 16,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 25,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 28,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 30,
            'penyakit_id' =>4 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 13,
            'penyakit_id' =>5 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 14,
            'penyakit_id' =>5 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 19,
            'penyakit_id' =>5 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 22,
            'penyakit_id' =>5 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 23,
            'penyakit_id' =>5 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 24,
            'penyakit_id' =>5 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 28,
            'penyakit_id' =>5 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 1,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 2,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 3,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 4,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 6,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 7,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 8,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 9,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 11,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 13,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 14,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 16,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 19,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 22,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 23,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 24,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 25,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 27,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 28,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 30,
            'penyakit_id' =>6 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 4,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 5,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 6,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 7,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 8,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 9,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 11,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 13,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 16,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 17,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 23,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 25,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 28,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 29,
            'penyakit_id' =>7 
        ]);
        GejalaPenyakit::create([
            'gejala_id' => 30,
            'penyakit_id' =>7 
        ]);
    }
}