<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardUserRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_user_rules', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('board_id', 24);
	        $table->string('user_id', 24);
	        $table->string('label_color', 12)->nullable();
	        $table->boolean('negative_label');
            $table->timestamps();
	        $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('board_user_rules');
    }
}
