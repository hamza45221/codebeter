<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Queue\Jobs\Job;

class JobTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job = new \App\Models\Job();
        $job->title = 'UI/UX Designer';
        $job->type = 'Full Time';
        $job->status = 'available';
        $job->desc = '';
        $job->end_date = '';
        $job->save();

        $job = new \App\Models\Job();
        $job->title = 'Front End Developer';
        $job->type = 'Full Time';
        $job->status = 'available';
        $job->desc = '';
        $job->end_date = '';
        $job->save();

        $job = new \App\Models\Job();
        $job->title = 'PhP/Laravel Junior Developer';
        $job->type = 'Full Time';
        $job->status = 'available';
        $job->desc = '';
        $job->end_date = '';
        $job->save();

        $job = new \App\Models\Job();
        $job->title = 'PHP/Laravel Senior Developer';
        $job->type = 'Full Time';
        $job->status = 'available';
        $job->desc = '';
        $job->end_date = '';
        $job->save();
    }
}
