<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApplicantMail;
use App\Models\Main;
use App\Models\ProjectMail;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class MainAdminController extends Controller
{
    public function index(){

    $users = User::all()->count();
    $applicant = ApplicantMail::all()->count();
    $projMail = ProjectMail::all()->count();
    $team = Team::all()->count();
        return view('admin.dashboard',compact('users','applicant','projMail','team'));
    }
    public function main(){
        $main = Main::first();
        return view('admin.main',compact('main'));
    }


    public function store(Request $request)
    {
        $data = Main::first() ?? new Main();

        // Simple text fields
        $data->tag_line = $request->tag_line;
        $data->hero_heading = $request->hero_heading;
        $data->happy_clients = $request->happy_clients;
        $data->whatsapp_num = $request->whatsapp_num;
        $data->google_meet_link = $request->google_meet_link;
        $data->services_title = $request->services_title;
        $data->about_title = $request->about_title;
        $data->about_desc = $request->about_desc;
        $data->consultation_btn_name = $request->consultation_btn_name;
        $data->about_more_btn_name = $request->about_more_btn_name;
        $data->projects_title = $request->projects_title;
        $data->methodology_title = $request->methodology_title;
        $data->clients_say_title = $request->clients_say_title;
        $data->opportunities_title = $request->opportunities_title;
        $data->opportunities_sub_title = $request->opportunities_sub_title;
        $data->jobs_avaliable = $request->jobs_avaliable;

        // File uploads
        if ($request->hasFile('hero_video')) {
            $data->hero_video = 'storage/'.  $request->file('hero_video')->store('uploads', 'public');
        }
        if ($request->hasFile('call_sec_person_img')) {
            $data->call_sec_person_img ='storage/'. $request->file('call_sec_person_img')->store('uploads', 'public');
        }
        if ($request->hasFile('call_sec_code_img')) {
            $data->call_sec_code_img = 'storage/'.  $request->file('call_sec_code_img')->store('uploads', 'public');
        }
        if ($request->hasFile('about_main_img')) {
            $data->about_main_img = 'storage/'.  $request->file('about_main_img')->store('uploads', 'public');
        }
        if ($request->hasFile('methodology_bg_image')) {
            $data->methodology_bg_image = 'storage/'.  $request->file('methodology_bg_image')->store('uploads', 'public');
        }
        if ($request->hasFile('opportunities_img')) {
            $data->opportunities_img = 'storage/'.  $request->file('opportunities_img')->store('uploads', 'public');
        }

        if ($request->has('happy_clients_img')) {
            $clients = [];

            foreach ($request->happy_clients_img as $client) {
                // Case 1: New image uploaded
                if (!empty($client['image'])) {
                    $path = $client['image']->store('uploads/clients', 'public');
                    $clients[] = ['image' => 'storage/' . $path];
                }
                // Case 2: No new file, keep old one
                elseif (!empty($client['old_image'])) {
                    $clients[] = ['image' => $client['old_image']];
                }
            }

            $data->happy_clients_img = $clients;
        } else {
            $data->happy_clients_img = [];
        }

        if ($request->has('client_slider_imgs')) {
            $sliderImgs = [];

            foreach ($request->client_slider_imgs as $slider) {
                // New image uploaded
                if (!empty($slider['image'])) {
                    $path = $slider['image']->store('uploads/client_sliders', 'public');
                    $sliderImgs[] = ['image' => 'storage/' . $path];
                }
                // No new file → keep old one
                elseif (!empty($slider['old_image'])) {
                    $sliderImgs[] = ['image' => $slider['old_image']];
                }
            }

            $data->client_slider_imgs = $sliderImgs;
        } else {
            $data->client_slider_imgs = [];
        }

        $data->about_list = $request->about_list ?? [];
        $data->save();

        return redirect()->back()->with('success', 'Main data saved successfully!');
    }
}
