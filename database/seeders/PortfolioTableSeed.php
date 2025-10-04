<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $portfolio = new Portfolio();
        $portfolio->name ='Carspector';
        $portfolio->title ='Business Website';
        $portfolio->size ='large';
        $portfolio->year ='2025';
        $portfolio->image ='assets/images/portfolio/pro8.webp';
        $portfolio->link ='https://carspector.de/';
        $portfolio->save();

        $portfolio = new Portfolio();
        $portfolio->name ='Tasckr';
        $portfolio->title ='Business Website';
        $portfolio->size ='small';
        $portfolio->year ='2025';
        $portfolio->image ='assets/images/portfolio/pro7.webp';
        $portfolio->link ='https://tasckr.craveteck.pk/';
        $portfolio->save();


        $portfolio = new Portfolio();
        $portfolio->name ='TaxiLink';
        $portfolio->title ='CRM';
        $portfolio->size ='large';
        $portfolio->year ='2025';
        $portfolio->image ='assets/images/portfolio/pro5.webp';
        $portfolio->link ='https://texilinkcrm.codebeter.com/';
        $portfolio->save();


        $portfolio = new Portfolio();
        $portfolio->name ='Denysverh';
        $portfolio->title ='Portfolio Site';
        $portfolio->year ='2025';
        $portfolio->size ='small';
        $portfolio->image ='assets/images/portfolio/pro6.webp';
        $portfolio->link ='http://denysverh.codebeter.com';
        $portfolio->save();

        $portfolio = new Portfolio();
        $portfolio->name ='RailOrignal';
        $portfolio->title ='Business Site';
        $portfolio->year ='2025';
        $portfolio->size ='small';
        $portfolio->image ='assets/images/portfolio/pro4.webp';
        $portfolio->link ='http://railoriginal.codebeter.com';
        $portfolio->save();


        $portfolio = new Portfolio();
        $portfolio->name ='Business Brokers';
        $portfolio->title ='Management System';
        $portfolio->year ='2025';
        $portfolio->size ='large';
        $portfolio->image ='assets/images/portfolio/pro3.webp';
        $portfolio->link ='http://business-brokers.codebeter.com';
        $portfolio->save();


        $portfolio = new Portfolio();
        $portfolio->name ='Jobportal';
        $portfolio->year ='2025';
        $portfolio->size ='small';
        $portfolio->image ='assets/images/portfolio/pro2.webp';
        $portfolio->link ='http://jobportal.codebeter.com';
        $portfolio->save();
    }
}
