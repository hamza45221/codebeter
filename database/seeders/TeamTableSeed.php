<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = new Team();
        $team->name ='Hamza Javed';
        $team->title ='Founder & CEO';
        $team->desc ='With 4 years of coding experience, this tech enthusiast is leading our company`s journey with creativity and knowledge. devoted to creating a changing technology environment.';
        $team->image ='assets/images/about/found.jpg';
        $team->facebook_link ='https://www.facebook.com/share/16vC5D5U3t/';
        $team->linkedIn_link ='www.linkedin.com/in/hamza-javed-dev';
        $team->save();

        $team = new Team();
        $team->name ='Hassam';
        $team->title ='Software Engineer';
        $team->desc ='Software Engineer with 2 years` expertise. Excels in crafting efficient solutions, dedicated to top-notch code and project success.';
        $team->image ='assets/images/about/laravel_dev1.jpg';
        $team->facebook_link ='https://www.facebook.com/share/1JNFoy1pCC/';
        $team->linkedIn_link ='https://www.linkedin.com/in/hassam571?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app';
        $team->save();

        $team = new Team();
        $team->name ='Abdur Rehman';
        $team->title ='Senior Frontend Engineer';
        $team->desc ='With 2 years of expertise, Abdur Rehman is a Senior Frontend Engineer. A visionary in crafting elegant and high-performance user interfaces, he leads with experience and innovation.';
        $team->image ='assets/images/about/react_dev1.jpg';
        $team->facebook_link ='https://www.facebook.com/share/1JGVJAyFsL/';
        $team->linkedIn_link ='https://www.linkedin.com/in/abd-ur-rehman-nawaz?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app';
        $team->save();

        $team = new Team();
        $team->name ='Saba';
        $team->title ='Frontend Engineer';
        $team->desc ='Saba Frontend Engineer with 1+ years` expertise. Excels in crafting robust solutions, dedicated to innovation and project success.';
        $team->image ='assets/images/about/user_female.jpeg';
        $team->facebook_link ='';
        $team->linkedIn_link ='';
        $team->save();
    }
}
