<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('std_name');
            $table->string('std_institute');
            $table->string('std_class');
            $table->string('std_number');
            $table->string('std_email');
            $table->string('std_password');
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
        Schema::dropIfExists('std_registrations');
    }
}
