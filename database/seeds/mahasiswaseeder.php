<?php

use Illuminate\Database\Seeder;
use App\phpmahasiswa;

class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new mahasiswa();
        $mhs1->nbi = "1461900027";
        $mhs1->nama = "Risma Auna F.";
        $mhs1->tmp_tgl = "Malang, 03 Maret 1998";
        $mhs1->save();

        $mhs2 = new mahasiswa();
        $mhs2->nbi = "1461900044";
        $mhs2->nama = "Novandika Yuda P.";
        $mhs2->tmp_tgl = "Surabaya, 03 November 2000";
        $mhs2->save();

    }
}
