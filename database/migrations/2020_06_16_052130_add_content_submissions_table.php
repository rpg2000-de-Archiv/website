<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContentSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_submissions', function (Blueprint $table) {
            $table->id();
            $table->integer('contest_id');
            $table->integer('place');
            $table->text('username');
            $table->text('submission1title')->nullable();
            $table->text('submission1url')->nullable();
            $table->text('submission2title')->nullable();
            $table->text('submission2url')->nullable();
            $table->text('submission3title')->nullable();
            $table->text('submission3url')->nullable();
            $table->integer('points')->nullable();
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
        Schema::dropIfExists('content_submissions');
    }
}
