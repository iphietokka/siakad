<?php

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('kelas')->insert([
            [
                'kode_kelas' => 'VII',
                'nama' => 'Kelas III',
                'guru_id' => '1',
                'ruangan_id' => '1',
            ],

        ]);
    }
}
