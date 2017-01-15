<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCardPriorityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_card_priority', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('user_id', 24);
	        $table->string('card_id', 24);
	        $table->integer('priority')->unsigned();
            $table->timestamps();
	        $table->index(array('user_id', 'priority'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_card_priority');
    }
}
