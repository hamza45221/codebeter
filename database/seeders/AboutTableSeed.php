<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new About();
        $about->title1 = 'Doing the';
        $about->title2 = 'Right Thing,';
        $about->title3 = 'at the';
        $about->title4 = 'Right Time';
        $about->user_title = 'Including users on all of our 2024 platforms';
        $about->user_count = '70';
        $about->project_title = 'Successful projects';
        $about->project_count = '50';
        $about->members_title = 'Team members';
        $about->members_count = '10';
        $about->satisfaction_title = 'Customer Satisfaction';
        $about->satisfaction_count = '99';
        $about->heading = 'Crafting Exceptional Web Experiences for Your Business';
        $about->description = 'our team builds eye-catching, high-speed digital experiences that help your brand stand out from the crowd. by mixing creative flair, fresh ideas, and solid tech know-how, we guide you confidently through web design, development, and savvy online marketing.';
        $about->about_image1 = 'assets/images/about/about1.jpg';
        $about->about_image2 = 'assets/images/about/about2.jpg';
        $about->adviser_heading = 'Your Reliable Adviser in the Changing Digital Environment';
        $about->our_mission_title = 'Our mission';
        $about->our_mission_description = 'We exist to guide your online journey, staying next to you as the digital world keeps changing. By crafting fresh web solutions, we lift your brand and help turn visits into real success.';
        $about->our_vision_title = 'Our vision';
        $about->our_vision_description = 'In addition to creating aesthetically beautiful websites, our vision also includes creating user experiences that are consistent with your brand identity.';
        $about->our_professionals_heading = 'Get to know our professionals.';
        $about->our_professionals_desc = 'Our dedicated team is passionate about delivering exceptional results that exceed your expectations.';
        $about->save();
    }
}
