<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllParentsTable extends Migration
{
    public function up()
    {
        Schema::create('all_parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('surname');
            $table->string('occupation');
            $table->string('id_number')->nullable();
            $table->string('p_o_box');
            $table->string('town');
            $table->string('town_code');
            $table->string('phone_no');
            $table->string('landline')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian');
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
