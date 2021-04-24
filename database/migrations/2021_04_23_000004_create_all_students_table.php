<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('all_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surname');
            $table->string('name');
            $table->string('p_o_box');
            $table->string('town');
            $table->string('town_code');
            $table->string('phone_no');
            $table->string('email');
            $table->string('country');
            $table->date('date_of_birth');
            $table->string('religion')->nullable();
            $table->string('gender');
            $table->string('village');
            $table->string('county');
            $table->string('disabled');
            $table->longText('description')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->string('kcpe_grade');
            $table->integer('kcpe_total_marks');
            $table->string('admission_number');
            // $table->date('enrolled_from')->nullable();
            // $table->date('enrolled_to')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
