<?php

namespace Database\Seeders;

use App\Models\Carrer;
use Illuminate\Database\Seeder;

class CarrerTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrer = new Carrer();
        $carrer->title1 = 'Join Our Creative Group of';
        $carrer->title2 = 'Web Professionals';
        $carrer->desc= 'Developing the Future of Web Development and Design. <br> providing cutting-edge, quick, and user-focused digital experiences.';
        $carrer->promote_title = 'We Promote Connectivity Worldwide';

        $carrer->improving_title = 'Improving together';
        $carrer->improving_icon = '';
        $carrer->improving_desc = 'Integrity and trust are the cornerstones of our relationships with clients and team members.';

        $carrer->working_title = 'Working together';
        $carrer->working_icon = '';
        $carrer->working_desc = 'We recognize the value of ongoing education and skill development in order to stay ahead in the rapidly evolving digital world.';

        $carrer->developing_title = 'Developing together';
        $carrer->developing_icon = '';
        $carrer->developing_desc = 'We set high standards and go above and beyond expectations in order to achieve excellence in every facet of our work.';

        $carrer->job_title = 'Discover Your Career—You Deserve It!';
        $carrer->job_desc = 'Look through our exciting job openings to find the one that best suits your goals and skill set.';
        $carrer->requirement_title = 'Our Recruitment Process';

        $carrer->requirement_details = [
            [
              'title'=>'1. Application Submission',
              'heading'=>'What to Do',
              'desc'=>'Candidates start by using our online portal to submit their resumes and pertinent information.
                                                Candidates who fit the job requirements and come from a variety of backgrounds are welcome.
                                                To show interest in becoming a member of our team, you must first complete this step.',
              'image'=>'assets/images/career/steps/01.jpg',
            ],
            [
                'title'=>'2. Initial Screening',
                'heading'=>'What to Do',
                'desc'=>'Every application is carefully examined by our HR team in order to create a shortlist of qualified applicants.
                                                Qualifications, pertinent experience, and role alignment are the main criteria we use for evaluation.
                                                Only individuals who fulfill our preliminary requirements advance to the following phase.
                                                with us.',
                'image'=>'assets/images/career/steps/02.jpg',
            ],
            [
                'title'=>'3. First Interview',
                'heading'=>'What to Do',
                'desc'=>'Candidates who make the short list are invited to an initial interview.
                                                Skills, Experience , attitude, and aommunication are the main topics of this stage.
                                                It allows us to learn more about the individual who wrote the resume.',
                'image'=>'assets/images/career/steps/03.jpg',
            ],
            [
                'title'=>'4. Technical/Skill Assessment',
                'heading'=>'What to Do',
                'desc'=>'Candidates show their technical proficiency or job-specific skills by completing a task or test.
                                                We evaluate the method, precision, and quality of the problem-solving.
                                                This step guarantees that applicants are technically qualified for the position.',
                'image'=>'assets/images/career/career-skills.jpg',
            ],
            [
                'title'=>'5. Final Interview',
                'heading'=>'What to Do',
                'desc'=>'Senior team members or decision-makers interview the best applicants.
                                                Deeper conversations about expectations, values, and experience are the main focus of this step.
                                                It assists us in reaching a firm hiring conclusion.',
                'image'=>'assets/images/career/career-inter.jpg',
            ],
        ];

        $carrer-> save();
    }
}
