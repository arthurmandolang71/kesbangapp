<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ForKompinda;
use App\Models\PemberiInfo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@manadokota.go.id',
            'username' => 'adminkesbang',
            'password' =>  bcrypt('adminkesbangpol'),
            'active' => 1,
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Paaldua',
            'singkatan' => 'Kec. Paaldua',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Tikala',
            'singkatan' => 'Kec. Tikala',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Mapanget',
            'singkatan' => 'Kec. Mapanget',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Singkil',
            'singkatan' => 'Kec. Singkil',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Tuminting',
            'singkatan' => 'Kec. Tuminting',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Bunaken',
            'singkatan' => 'Kec. Bunaken',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Bunaken Kepulauan',
            'singkatan' => 'Kec. Bunaken Kepulauan',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Wanea',
            'singkatan' => 'Kec. Wanea',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Wenang',
            'singkatan' => 'Kec. Wenang',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Sario',
            'singkatan' => 'Kec. Sario',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kecamatan Malalayang',
            'singkatan' => 'Kec. Malalayang',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kelurahan Banjer',
            'singkatan' => 'Kel. Banjer',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kelurahan Paal IV',
            'singkatan' => 'Kel. Paal IV',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kelurahan Taas',
            'singkatan' => 'Kel. Taas',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kelurahan Tikala Ares',
            'singkatan' => 'Kel. Tikala Ares',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Kelurahan Tikala Baru',
            'singkatan' => 'Kel. Tikala Baru',
            'deskripsi' => '',
            'katagori' => 'Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'FPK',
            'singkatan' => 'Forum Pembauran Masyarakat',
            'deskripsi' => '',
            'katagori' => 'Non Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'FKUB',
            'singkatan' => 'Forum Kerukunan Umat Beragama',
            'deskripsi' => '',
            'katagori' => 'Non Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'Pers APM',
            'singkatan' => 'Pers APM',
            'deskripsi' => '',
            'katagori' => 'Non Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'FKDM',
            'singkatan' => 'Forum Kewaspadaan Dini Masyarakat',
            'deskripsi' => '',
            'katagori' => 'Non Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'BNPT',
            'singkatan' => 'Badan Nasional Pencegah Terorisme',
            'deskripsi' => '',
            'katagori' => 'Non Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        PemberiInfo::create([
            'nama' => 'BINDA',
            'singkatan' => 'Badan Intelegent Daerah',
            'deskripsi' => '',
            'katagori' => 'Non Pemerintah',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        ForKompinda::create([
            'nama' => 'Pemerintah Kota Manado',
            'singkatan' => 'Pemkot Manado',
            'deskripsi' => '',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        ForKompinda::create([
            'nama' => 'Polresta Manado',
            'singkatan' => 'Polresta Manado',
            'deskripsi' => '',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        ForKompinda::create([
            'nama' => 'Kodim Manado',
            'singkatan' => 'Kodim Manado',
            'deskripsi' => '',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        ForKompinda::create([
            'nama' => 'Kejaksaan Negeri Manado',
            'singkatan' => 'Kejari Manado',
            'deskripsi' => '',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        ForKompinda::create([
            'nama' => 'Pengadilan Negeri Manado',
            'singkatan' => 'Pengadilan Manado',
            'deskripsi' => '',
            'kode_akses' =>  rand(10000, 99999),
        ]);

        ForKompinda::create([
            'nama' => 'DPRD Kota Manado',
            'singkatan' => 'DPRD Kota Manado',
            'deskripsi' => '',
            'kode_akses' =>  rand(10000, 99999),
        ]);
    }
}
