<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\JobFormMail;
use App\Mail\ProjectFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function projectMail(Request $request)
    {
        Mail::to('mail.codebeter@gmail.com')->send(new ProjectFormMail($request->all()));

        return redirect()->back()->with('success', 'Thank you for Submitting the Project...!');
    }
    public function contactMail(Request $request)
    {
        Mail::to('mail.codebeter@gmail.com')->send(new ContactFormMail($request->all()));

        return redirect()->back()->with('success', 'Thank you for Contacting Us...!');
    }
    public function applyJob(Request $request)
    {
        Mail::to('mail.codebeter@gmail.com')->send(new JobFormMail($request->all()));

        return redirect()->back()->with('success', 'Thank you for Apply on this job ...!');
    }
}
