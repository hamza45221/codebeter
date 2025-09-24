<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view('frontpages.index');
    }

    public function contact()
    {
        return view('frontpages.contact');
    }

    public function error()
    {
        return view('frontpages.error');
    }

    public function portfolio()
    {
        return view('frontpages.portfolio');
    }

    public function pricing()
    {
        return view('frontpages.pricing');
    }

    public function about()
    {
        return view('frontpages.about');
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
        return view('frontpages.carrer');
    }
    public function applyJob()
    {
        return view('frontpages.apply-job');
    }

    public function team()
    {
        return view('frontpages.team');
    }

    public function signin()
    {
        return view('frontpages.sign-in');
    }
}
