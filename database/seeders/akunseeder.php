<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class akunseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nama' => 'ahmad',
               'nis'=>'1234',
               'kelas'=>'xii-rpl',
               'password'=> bcrypt('123456'),
               'role'=>'siswa'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
