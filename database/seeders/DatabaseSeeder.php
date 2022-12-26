<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Chat::query()->create([
            'words' => 'syarat||mendaftar||pendaftaran',
            'answer' => 'Memiliki ijazah SMA/SMK/MA/Paket C/Sederajat dan Komitmen untuk menyelesaikan kuliah',
        ]);

        Chat::query()->create([
            'words' => 'batasan||umur',
            'answer' => 'Mahasiswa di Akademi Komunitas tidak dibatasi usia sehingga siapapun boleh kuliah selama memiliki tekad untuk kuliah',
        ]);

        Chat::query()->create([
            'words' => 'biaya||mendaftar||pendaftaran',
            'answer' => 'Biaya pendaftaran di AKB adalah Rp. 200.000',
        ]);

        Chat::query()->create([
            'words' => 'ukt||paling||mahal||termahal||tertinggi',
            'answer' => 'UKT maksimum di AKB adalah Rp. 1.150.000 per semester',
        ]);

        Chat::query()->create([
            'words' => 'prodi||program||studi',
            'answer' => 'Program Studi di AKB adalah sebagai berikut: 1) D2 Administrasi Server dan Jaringan Komputer; 2) D2 Penyuntingan Audio dan Video; 3) D2 Pengolahan Hasil Ternak Unggas',
        ]);

        Chat::query()->create([
            'words' => 'akreditasi',
            'answer' => 'Semua program studi terakreditasi “Baik”',
        ]);

        Chat::query()->create([
            'words' => 'kelas||karyawan||sore||malam',
            'answer' => 'Kelas karyawan akan dibuka jika kuota mahasiswa sudah memenuhi (min. 20 mahasiswa per kelas) dan jika kurang dari jumlah minimal maka diikutkan perkuliahan kelas reguler dengan penjadwalan yang fleksibel seperti hybrid (online dan offline)',
        ]);

        Chat::query()->create([
            'words' => 'beasiswa',
            'answer' => 'Beasiswa yang ada di AKB adalah Beasiswa KIP Kuliah dan Beasiswa Pemerintah Kota Blitar',
        ]);

        Chat::query()->create([
            'words' => 'syarat||persyaratan||beasiswa',
            'answer' => 'KIP Kuliah : Sesuai ketentuan dari KIP Kuliah; Beasiswa Pemerintah Kota Blitar : Memiliki KTP dengan domisili Kota Blitar',
        ]);

        Chat::query()->create([
            'words' => 'didapatkan||dapatkan||beasiswa',
            'answer' => 'Beasiswa Pemerintah Kota Blitar mencakup penggantian Uang Kuliah Tunggal dan Biaya Pendaftaran',
        ]);

        Chat::query()->create([
            'words' => 'didapatkan||dapatkan||beasiswa||kip||kuliah',
            'answer' => 'Mencakup penggantian Uang Kuliah Tunggal dan Biaya Pendaftaran serta uang bulanan',
        ]);

        Chat::query()->create([
            'words' => 'ukt||biaya||kuliah||transfer||lanjut||jenjang',
            'answer' => 'Tidak, selama menempuh pendidikan di AKB maka UKT yang dibayarkan setiap semester sesuai ketentuan dari AKB. Ketika sudah lanjut jenjang, maka besarnya UKT / Uang Kuliah akan mengikuti kebijakan kampus tujuan',
        ]);

        Chat::query()->create([
            'words' => 'dibayarkan',
            'answer' => 'Biaya kuliah di AKB adalah biaya pendaftaran dan UKT, tidak ada biaya - biaya lainnya',
        ]);

        Chat::query()->create([
            'words' => 'alamat',
            'answer' => 'Alamat AKNPSF berada di Jalan dr. Sutomo No. 29 Kota Blitar',
        ]);

        Chat::query()->create([
            'words' => 'email',
            'answer' => 'Alamat email AKNPSF adalah humas@akb.ac.id',
        ]);

        Chat::query()->create([
            'words' => 'telfon',
            'answer' => 'Nomor telfon AKNPSF adalah 0342-814644',
        ]);
    }
}
