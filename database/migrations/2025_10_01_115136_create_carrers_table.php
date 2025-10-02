<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrers', function (Blueprint $table) {
            $table->id();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->text('desc')->nullable();
            $table->string('promote_title')->nullable();

            $table->string('improving_title')->nullable();
            $table->string('improving_icon')->nullable();
            $table->text('improving_desc')->nullable();

            $table->string('working_title')->nullable();
            $table->string('working_icon')->nullable();
            $table->text('working_desc')->nullable();

            $table->string('developing_title')->nullable();
            $table->string('developing_icon')->nullable();
            $table->text('developing_desc')->nullable();

            $table->string('job_title')->nullable();
            $table->text('job_desc')->nullable();
            $table->string('requirement_title')->nullable();
            $table->longText('requirement_details')->nullable();

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
        Schema::dropIfExists('carrers');
    }
}
