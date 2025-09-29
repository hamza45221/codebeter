<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->string('tag_line')->nullable();
            $table->string('hero_heading')->nullable();
            $table->string('happy_clients')->nullable();
            $table->string('whatsapp_num')->nullable();
            $table->longText('happy_clients_img')->nullable();
            $table->string('hero_video')->nullable();
            $table->string('call_sec_person_img')->nullable();
            $table->string('call_sec_code_img')->nullable();
            $table->string('google_meet_link')->nullable();
            $table->longText('client_slider_imgs')->nullable();
            $table->string('services_title')->nullable();
            $table->string('about_title')->nullable();
            $table->text('about_desc')->nullable();
            $table->longText('about_list')->nullable();
            $table->string('consultation_btn_name')->nullable();
            $table->string('about_more_btn_name')->nullable();
            $table->string('about_main_img')->nullable();
            $table->string('projects_title')->nullable();
            $table->string('methodology_title')->nullable();
            $table->string('methodology_bg_image')->nullable();
            $table->string('clients_say_title')->nullable();
            $table->string('opportunities_title')->nullable();
            $table->string('opportunities_sub_title')->nullable();
            $table->string('opportunities_img')->nullable();
            $table->string('jobs_avaliable')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mains');
    }
}
