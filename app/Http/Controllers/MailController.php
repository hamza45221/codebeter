<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\JobFormMail;
use App\Mail\ProjectFormMail;
use App\Models\ApplicantMail;
use App\Models\ContactMail;
use App\Models\ProjectMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function projectMail(Request $request)
    {

        $data = new ProjectMail();

        $data->user_id = auth()->user()->id;
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone_number = $request->phone_number;
        $data->project_name = $request->project_name;
        $data->services = $request->services;
        $data->estimated_budget = $request->estimated_budget;
        $data->project_desc = $request->project_desc;

        if ($request->hasFile('upload_pro_detail')) {
            $file = $request->file('upload_pro_detail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data->upload_pro_detail ='storage/'. 'uploads/projects/' . $filename;
        }
        $data->save();
        Mail::to('mail.codebeter@gmail.com')->send(new ProjectFormMail($request->all()));

       if (!auth()->user()){
           return redirect()->route('login');
       }else{
           return redirect()->route('dashboard');
       }
        return redirect()->back()->with('success', 'Thank you for Submitting the Project...!');

    }
    public function contactMail(Request $request)
    {

        $mail = new ContactMail();
        $mail->user_id = auth()->user()->id;
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->client_want = $request->client_want;
        $mail->project_detail = $request->project_detail;
        $mail->save();
        Mail::to('mail.codebeter@gmail.com')->send(new ContactFormMail($request->all()));

        return redirect()->back()->with('success', 'Thank you for Contacting Us...!');
    }
    public function applyJob(Request $request)
    {
        $data = new ApplicantMail();
        $data->user_id = auth()->user()->id;
        $data->job_id = $request->job_id;
        $data->job_title = $request->job_title;
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->country = $request->country;
        $data->services = $request->services;
        $data->address = $request->address;

        if ($request->hasFile('upload_pro_detail')) {
            $file = $request->file('upload_pro_detail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');
            $data->upload_pro_detail ='storage/'. $path;
        }

        $data->save();
        Mail::to('mail.codebeter@gmail.com')->send(new JobFormMail($request->all()));

        return redirect()->back()->with('success', 'Thank you for Apply on this job ...!');
    }


    public function projectMailIndex()
    {

        $mails = ProjectMail::all();
        return view('admin.mail.projectmails',compact('mails'));
    }
    public function contactMailIndex()
    {
        $mails = ContactMail::all();
        return view('admin.mail.contactmails',compact('mails'));
    }
    public function applicantMailIndex()
    {
        $mails = ApplicantMail::all();
        return view('admin.mail.applicantmails',compact('mails'));
    }
}
