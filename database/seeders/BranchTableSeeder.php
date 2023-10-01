<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->delete();
        $datas = array(
            array(
                'name' => "Puducherry",
                'contact_number' => '1234567890',
                'address'   => "37, Kamaraj Salai, Thattanchavady, Puducherry, 605009",
                'code' => "VC"
            ),
        );
        DB::table('branches')->insert($datas);
    }
}
