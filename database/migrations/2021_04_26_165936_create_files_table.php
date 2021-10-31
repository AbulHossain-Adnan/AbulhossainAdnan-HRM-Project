<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{

    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('sender_name');
            $table->integer('user_id');
            $table->string('file');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('files');
    }
}
