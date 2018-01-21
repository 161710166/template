<?php

use Illuminate\Database\Seeder;

class widiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $a=[
              ['Nis'=>'123',
              'Nama'=>'Widi Ayu',
              'Tanggal_lahir'=>'2001-06-01',
              'Cita-cita'=>'tentara',
              'Photo'=>'tidak ada']
              ];
                DB::table('siswas')->insert($a);
    }
}
