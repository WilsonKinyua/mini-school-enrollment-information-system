<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAllStudentsTable extends Migration
{
    public function up()
    {
        Schema::table('all_students', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id');
            $table->foreign('created_by_id', 'created_by_fk_3755892')->references('id')->on('users');
        });
    }
}
