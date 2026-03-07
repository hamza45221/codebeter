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
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'project_name' => 'required|string|max:255',
            'services' => 'required|string|max:255',
            'project_desc' => 'required|string',
            'upload_pro_detail' => 'nullable|file|mimes:pdf,doc,docx,zip|max:10240'
        ]);

        $data = new ProjectMail();

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
            $path = $file->storeAs('uploads/projects', $filename, 'public');
            $data->upload_pro_detail = 'storage/' . $path;
        }
        
        try {
            $data->save();
            Mail::to(env('MAIL_TO_ADDRESS', 'info@codebeter.com'))->send(new ProjectFormMail($request->all()));
            return redirect()->back()->with('success', 'Thank you for Submitting the Project...!');
        } catch (\Exception $e) {
            \Log::error('Project mail error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error submitting your project. Please try again.');
        }
    }
    public function contactMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'client_want' => 'required|string|max:255',
            'project_detail' => 'required|string'
        ]);

        $data = new ContactMail();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->client_want = $request->client_want;
        $data->project_detail = $request->project_detail;
        
        try {
            $data->save();
            Mail::to(env('MAIL_TO_ADDRESS', 'info@codebeter.com'))->send(new ContactFormMail($request->all()));
            return redirect()->back()->with('success', 'Thank you for Contacting Us...!');
        } catch (\Exception $e) {
            \Log::error('Contact mail error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again.');
        }
    }
    public function applyJob(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'services' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'upload_pro_detail' => 'required|file|mimes:pdf,doc,docx|max:5120'
        ]);

        $data = new ApplicantMail();
        $data->job_id = $request->job_id;
        $data->job_title = $request->job_title;
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->services = $request->services;
        $data->address = $request->address;

        if ($request->hasFile('upload_pro_detail')) {
            $file = $request->file('upload_pro_detail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/applications', $filename, 'public');
            $data->upload_pro_detail = 'storage/' . $path;
        }

        try {
            $data->save();
            Mail::to(env('MAIL_TO_ADDRESS', 'info@codebeter.com'))->send(new JobFormMail($request->all()));
            return redirect()->back()->with('success', 'Thank you for Applying to this job...!');
        } catch (\Exception $e) {
            \Log::error('Job application error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error submitting your application. Please try again.');
        }
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
