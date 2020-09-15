<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('ins_name');
            $table->string('ins_institute');
            $table->string('ins_number');
            $table->string('ins_email');
            $table->string('ins_password');
            $table->string('ins_expertise');
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
        Schema::dropIfExists('ins_registrations');
    }
}
