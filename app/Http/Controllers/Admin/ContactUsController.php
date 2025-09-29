<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Main;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        $contact = ContactUs::first();
        return view('admin.contactus',compact('contact'));
    }

    public function store(Request $request)
    {
        $data = ContactUs::first() ?? new ContactUs();

        $data->title1 = $request->title1;
        $data->title2 = $request->title2;
        $data->heading = $request->heading;
        $data->descritpion = $request->descritpion;
        $data->in_touch = $request->in_touch;
        $data->call_title = $request->call_title;
        $data->call_num = $request->call_num;
        $data->email_title = $request->email_title;
        $data->email = $request->email;
        $data->facebook_link = $request->facebook_link;
        $data->twitter_link = $request->twitter_link;
        $data->linkedin_link = $request->linkedin_link;
        $data->map_location = $request->map_location;


        if ($request->hasFile('banner_img')) {
            $data->banner_img = 'storage/'.  $request->file('banner_img')->store('uploads', 'public');
        }



        $data->save();

        return redirect()->back()->with('success', 'Contact Us data saved successfully!');
    }
}
