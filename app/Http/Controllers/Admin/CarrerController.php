<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Carrer;
use Illuminate\Http\Request;

class CarrerController extends Controller
{
    public function index(){
        $carr = Carrer::first();
        return view('admin.carrer',compact('carr'));
    }


    public function store(Request $request)
    {
        $carr = Carrer:: first() ?? new Carrer();

        $carr->title1 = $request->title1;
        $carr->title2 = $request->title2;
        $carr->desc = $request->desc;
        $carr->promote_title = $request->promote_title;
        $carr->improving_title = $request->improving_title;
        $carr->improving_icon = $request->improving_icon;
        $carr->improving_desc = $request->improving_desc;
        $carr->working_title = $request->working_title;
        $carr->working_icon = $request->working_icon;
        $carr->working_desc = $request->working_desc;
        $carr->developing_title = $request->developing_title;
        $carr->developing_icon = $request->developing_icon;
        $carr->developing_desc = $request->developing_desc;
        $carr->job_title = $request->job_title;
        $carr->job_desc = $request->job_desc;
        $carr->requirement_title = $request->requirement_title;


        // handle repeater
        $details = [];
        if ($request->has('requirement_details')) {
            foreach ($request->requirement_details as $detail) {
                $step = [
                    'title'   => $detail['title'] ?? '',
                    'heading' => $detail['heading'] ?? '',
                    'desc'    => $detail['desc'] ?? '',
                    'image'   => $detail['old_image'] ?? null,
                ];

                // if a new image uploaded
                if (!empty($detail['image']) && $detail['image'] instanceof \Illuminate\Http\UploadedFile) {
                    $path = $detail['image']->store('uploads/career/steps', 'public');
                    $step['image'] = 'storage/' . $path;
                }

                $details[] = $step;
            }
        }

        $carr->requirement_details = $details;
        $carr->save();

        return redirect()->back()->with('success', 'Carrer created successfully!');
    }
}
