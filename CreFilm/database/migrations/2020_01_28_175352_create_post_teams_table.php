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
            $table->string('pre_position_id');
            $table->string('pre_person');
            $table->string('pre_budget');
            $table->string('pro_position_id');
            $table->string('pro_person');
            $table->string('pro_budget');
            $table->string('post_position_id');
            $table->string('post_person');
            $table->string('post_budget');
            $table->string('img_head');
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
