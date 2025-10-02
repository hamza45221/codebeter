<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            // Titles
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();
            $table->string('title4')->nullable();

            // Users
            $table->string('user_title')->nullable();
            $table->integer('user_count')->default(0);

            // Projects
            $table->string('project_title')->nullable();
            $table->integer('project_count')->default(0);

            // Team members
            $table->string('members_title')->nullable();
            $table->integer('members_count')->default(0);

            // Satisfaction
            $table->string('satisfaction_title')->nullable();
            $table->integer('satisfaction_count')->default(0);

            // About section
            $table->string('heading')->nullable();
            $table->text('description')->nullable();
            $table->string('about_image1')->nullable();
            $table->string('about_image2')->nullable();

            // Adviser
            $table->string('adviser_heading')->nullable();

            // Mission
            $table->string('our_mission_title')->nullable();
            $table->text('our_mission_description')->nullable();

            // Vision
            $table->string('our_vision_title')->nullable();
            $table->text('our_vision_description')->nullable();

            // Professionals
            $table->string('our_professionals_heading')->nullable();
            $table->text('our_professionals_desc')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
