<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('ip_address')->nullable();
            $table->string('workfrom')->nullable();
            $table->string('user_name');
            $table->string('date');
            $table->integer('status')->nullable();
            $table->string('clock_in');
            $table->string('clock_out');
            $table->string('work_time');
            $table->string('note')->nullable();

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
        Schema::dropIfExists('attendences');
    }
}
