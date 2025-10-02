<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        return view('admin.about',compact('about'));
    }


    public function store(Request $request)
    {
        $about = About:: first() ?? new About();

        $about->title1 = $request->title1;
        $about->title2 = $request->title2;
        $about->title3 = $request->title3;
        $about->title4 = $request->title4;

        $about->user_title = $request->user_title;
        $about->user_count = $request->user_count;

        $about->project_title = $request->project_title;
        $about->project_count = $request->project_count;

        $about->members_title = $request->members_title;
        $about->members_count = $request->members_count;

        $about->satisfaction_title = $request->satisfaction_title;
        $about->satisfaction_count = $request->satisfaction_count;

        $about->heading = $request->heading;
        $about->description = $request->description;

        // File Uploads
        if ($request->hasFile('about_image1')) {
            $about->about_image1 ='storage/'. $request->file('about_image1')->store('uploads', 'public');
        }
        if ($request->hasFile('about_image2')) {
            $about->about_image2 ='storage/'. $request->file('about_image2')->store('uploads', 'public');
        }

        $about->adviser_heading = $request->adviser_heading;

        $about->our_mission_title = $request->our_mission_title;
        $about->our_mission_description = $request->our_mission_description;

        $about->our_vision_title = $request->our_vision_title;
        $about->our_vision_description = $request->our_vision_description;

        $about->our_professionals_heading = $request->our_professionals_heading;
        $about->our_professionals_desc = $request->our_professionals_desc;

        $about->save();

        return redirect()->back()->with('success', 'About created successfully!');
    }
}
