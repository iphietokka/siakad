<?php

use Illuminate\Database\Seeder;

class SekolahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('sekolah')->insert([


            [

                'nama' => 'SMA Negeri 1 Makassar',
                'npsn' => '121212',
                'nss' => '13131313',
                'alamat' => 'Jl.Bawakaraeng no.1 Kota Makassar',
                'telepon' => '0987654321',
                'website' => 'smansa.sch.id',
                'email' => 'smansa@mail.com'
            ],


        ]);
    }
}
