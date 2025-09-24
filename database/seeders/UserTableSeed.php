<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new User();
        $data->name = 'Admin';
        $data->email = 'admin@gmail.com';
        $data->password = bcrypt('123456');
        $data->save();
    }
}
