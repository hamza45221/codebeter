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
        $data->happy_clients = 'Happy Clients';
        $data->whatsapp_num = '+92 329 1070012';
        $data->happy_clients_img = [
            ['image'=>'assets/images/client/huaman1.jpg'],
            ['image'=>'assets/images/client/human2.jpg'],
            ['image'=>'assets/images/client/human3.jpg'],
            ['image'=>'assets/images/client/human4.jpg'],
        ];

        $data->hero_video = 'assets/video/codebeter-hero.mp4';
        $data->call_sec_person_img = 'assets/images/bg/02.jpg';
        $data->call_sec_code_img = 'assets/images/bg/code.jpg';
        $data->google_meet_link = 'https://meet.google.com/your-meeting-code';
        $data->client_slider_imgs = [
            [
             'image1'=>'assets/images/client/logo-light/01.svg',
             'image2'=>'assets/images/client/logo-dark/01.svg',
            ],
            [
                'image1'=>'assets/images/client/logo-light/02.svg',
                'image2'=>'assets/images/client/logo-dark/02.svg',
            ],
            [
                'image1'=>'assets/images/client/logo-light/03.svg',
                'image2'=>'assets/images/client/logo-dark/03.svg',
            ],
            [
                'image1'=>'assets/images/client/logo-light/04.svg',
                'image2'=>'assets/images/client/logo-dark/04.svg',
            ],
            [
                'image1'=>'assets/images/client/logo-light/05.svg',
                'image2'=>'assets/images/client/logo-dark/05.svg',
            ],
            [
                'image1'=>'assets/images/client/logo-light/06.svg',
                'image2'=>'assets/images/client/logo-dark/06.svg',
            ],
            [
                'image1'=>'assets/images/client/logo-light/07.svg',
                'image2'=>'assets/images/client/logo-dark/07.svg',
            ],
            [
                'image1'=>'assets/images/client/logo-light/08.svg',
                'image2'=>'assets/images/client/logo-dark/08.svg',
            ],
            [
                'image1'=>'assets/images/client/logo-light/09.svg',
                'image2'=>'assets/images/client/logo-dark/09.svg',
            ],
        ];
        $data->services_title = 'Our expert services';
        $data->about_title = 'Leading the future of software innovation';
        $data->about_desc = 'Our expert team is dedicated to understanding your unique needs and delivering solutions that exceed expectations.';
        $data->about_list = [
            'item1'=>'Collaborative approach',
            'item2'=>'Agile development methodology',
            'item3'=>'Data security and compliance',
        ];
        $data->consultation_btn_name = 'Schedule a consultation';
        $data->about_more_btn_name = 'Learn more';
        $data->about_main_img = 'assets/images/about/04.jpg';
        $data->projects_title = 'Our latest projects';
        $data->methodology_title = 'Achieving mastery in every phase of our methodology.';
        $data->methodology_bg_image = 'assets/images/achivement.jpg';
        $data->clients_say_title = 'What our clients say';
        $data->opportunities_title = 'Explore Career Opportunities';
        $data->opportunities_sub_title = 'Apply to work with us';
        $data->opportunities_img = 'assets/images/elements/person-laptop.png';
        $data->jobs_avaliable = 'jobs are available';

        $data->save();
    }
}
