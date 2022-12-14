<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KnjigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('knjigas')->insert([
            'Naslov' => 'Na Drini cuprija',
            'BrojStrana' => '658',
            'pismo_id' => '1',
            'jezik_id' => '1',
            'povez_id' => '1',
            'format_id' => '2',
            'izdavac_id' => '2',
            'DatumIzdavanja' => '1918',
            'ISBN' => '12345678901234467890',
            'UkupnoPrimjeraka' => '70',
            'IzdatoPrimjeraka' => '0',
            'RezervisanoPrimjeraka' => '0',
            'Sadrzaj' => 'Sadrzaj knjige Na Drini cuprija'
        ]);
        DB::table('knjigas')->insert([
            'Naslov' => 'Gospoda Glembajevi',
            'BrojStrana' => '432',
            'pismo_id' => '2',
            'jezik_id' => '2',
            'povez_id' => '2',
            'format_id' => '1',
            'izdavac_id' => '1',
            'DatumIzdavanja' => '1987',
            'ISBN' => '12345678901235567890',
            'UkupnoPrimjeraka' => '50',
            'IzdatoPrimjeraka' => '0',
            'RezervisanoPrimjeraka' => '0',
            'Sadrzaj' => 'Sadrzaj knjige Gospoda Glembajevi'
        ]);
    }
}
