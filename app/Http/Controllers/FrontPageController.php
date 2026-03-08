<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carrer;
use App\Models\ContactUs;
use App\Models\Job;
use App\Models\Main;
use App\Models\Portfolio;
use App\Models\Reviews;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {

        $main = Main::first();
        $review = Reviews::all();
        $portfolio = Portfolio::all();
        return view('frontpages.index',compact('main','review','portfolio'));
    }

    public function contact()
    {
        $contact = ContactUs::first();
        return view('frontpages.contact',compact('contact'));
    }

    public function error()
    {
        return view('frontpages.error');
    }

    public function portfolio()
    {
        $portfolio = Portfolio::all();
        return view('frontpages.portfolio',compact('portfolio'));
    }

    public function pricing()
    {
        return view('frontpages.pricing');
    }

    public function about()
    {

        $about = About::first();
        $team = Team::all();
        return view('frontpages.about',compact('about','team'));
    }

    public function webDevelopment()
    {
        return view('frontpages.services');
    }

    public function service()
    {
        return view('frontpages.service');
    }

    public function servicesApi()
    {
        return view('frontpages.services.services-api');
    }

    public function support()
    {
        return view('frontpages.services.support-maintenance');
    }

    public function app()
    {
        return view('frontpages.services.app-development');
    }

    public function pos()
    {
        return view('frontpages.services.pos');
    }

    public function crm()
    {
        return view('frontpages.services.crm');
    }

    public function carrer()
    {
        $carrer = Carrer::first();
        $job = Job::all();
        return view('frontpages.carrer',compact('carrer','job'));
    }
    public function applyJob()
    {
        return view('frontpages.apply-job');
    }

    public function team()
    {
        return view('frontpages.team');
    }

    public function login()
    {
        return view('frontpages.sign-in');
    }

    

    public function register()
    {
        return view('frontpages.sign-up');
    }
}
