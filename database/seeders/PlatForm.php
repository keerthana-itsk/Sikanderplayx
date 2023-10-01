<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatForm extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plat_forms')->delete();
        $data = array(
            array('name' => "SIKANDAR777", 'code' => "S77"),
            array('name' => "SILVER EXCH", 'code' => "SILVEREXCH"),
            array('name' => "SIKANDER 247", 'code' => "S247"),
            array('name' => "LOTUSBOOK247", 'code' => "L247"),
            array('name' => "SIKANDEREXCH", 'code' => "SEXCH"),
            array('name' => "SIKANDER PLAYX", 'code' => "SPY"),
        );
        DB::table('plat_forms')->insert($data);
    }
}
