<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('instructor_id')->unsigned();
            $table->string('course_name');
            $table->string('course_description');
            $table->string('course_time_duration');
            $table->string('course_image');
            $table->string('course_active_status')->nullable();
            $table->string('course_delete_status')->nullable();
            $table->timestamps();

            $table->foreign('instructor_id')
            ->references('id')->on('ins_registraions')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
