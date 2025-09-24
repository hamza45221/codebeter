<?php

namespace Database\Seeders;

use App\Models\Main;
use App\Models\User;
use Illuminate\Database\Seeder;

class MainTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Main();
        $data->tag_line = 'Maximize productivity with next-generation software';
        $data->hero_heading = 'Building Reliable Website or Software That Drives your';
        $data->happy_clients = '30+ happy clients';
        $data->whatsapp_num = '03291070012';
        $data->happy_clients_img = '';
        $data->save();
    }
}
