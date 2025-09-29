<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Seeder;

class ContactUsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new ContactUs();
        $contact->title1 ='Contact';
        $contact->title2 ='us';
        $contact->banner_img ='assets/images/contect/contectus.jpg';
        $contact->heading ='Connect with our best support team';
        $contact->descritpion ='We`re thrilled that you`re considering reaching out to us. Whether you have a question, need assistance, or are interested in collaborating with us, this is the place to start the conversation.';
        $contact->in_touch ='Get in touch';
        $contact->call_title ='Feel free to call us.';
        $contact->call_num ='+92 3291070012';
        $contact->email_title  ='Join our growing team.';
        $contact->email ='mail.codebeter@gmail.com';
        $contact->facebook_link ='https://www.facebook.com/profile.php?id=61577180078622';
        $contact->twitter_link ='https://x.com/CodeBeter';
        $contact->linkedin_link ='https://www.linkedin.com/in/hamza-javed-48574936b/';
        $contact->map_location ='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3094.973546958881!2d72.69027018334327!3d32.06552874064571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39217794baf6b153%3A0x891b1b11658cf553!2sUniversity%20Road%2C%20Sargodha%2C%20Pakistan!5e1!3m2!1sen!2s!4v1754900553270!5m2!1sen!2s';
        $contact->save();
    }
}
