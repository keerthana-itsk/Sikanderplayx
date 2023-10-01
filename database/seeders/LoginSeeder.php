<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        echo '---------------------------------------' . "\n";
        echo '--------User Seeding-------' . "\n";

        $datas = [
            [
                'name' => 'Super Admin',
                'email' => 'developer@syscorp.in',
                'slug' => Str::upper(Str::random(10)),
                'password' => Hash::make('skit@12345'),
                'mobile' => '1234567890',
                'branch_id' => 1,
            ],
            [
                'name' => 'Sikander Playx',
                'email' => 'sikanderplayx@gmail.com',
                'slug' => Str::upper(Str::random(10)),
                'password' => Hash::make('1234567890'),
                'mobile' => '1234567890',
                'branch_id' => 1,
            ],
        ];


        foreach ($datas as $key => $value) {
            $data = new User;
            $data->name = $value['name'];
            $data->email = $value['email'];
            $data->slug = $value['slug'];
            $data->password = $value['password'];
            $data->mobile = $value['mobile'];
            $data->branch_id = $value['branch_id'];
            $data->save();
            echo "-------Roles Name=> $data->name --------------" . "\n";
        }

        // $user = User::all();
        // $user[0]->assignRole('Super Admin');
        // $user[1]->assignRole('Super Admin');
    }

}

