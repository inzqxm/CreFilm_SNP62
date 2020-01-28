<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('status')->nullable();
            $table->text('detail');
            $table->string('start_date');
            $table->string('end_date');
            $table->integer('pre_position_id')->nullable();
            $table->string('pre_person')->nullable();
            $table->string('pre_budget')->nullable();
            $table->integer('pro_position_id')->nullable();
            $table->string('pro_person')->nullable();
            $table->string('pro_budget')->nullable();
            $table->integer('post_position_id')->nullable();
            $table->string('post_person')->nullable();
            $table->string('post_budget')->nullable();
            $table->string('img_head')->nullable();
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
        Schema::dropIfExists('post_team');
    }
}
