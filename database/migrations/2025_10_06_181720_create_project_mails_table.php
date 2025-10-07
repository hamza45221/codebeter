<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_mails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('project_name')->nullable();
            $table->string('services')->nullable();
            $table->string('estimated_budget')->nullable();
            $table->text('project_desc')->nullable();
            $table->string('upload_pro_detail')->nullable();
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
        Schema::dropIfExists('project_mails');
    }
}
