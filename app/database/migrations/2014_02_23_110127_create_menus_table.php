<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::create('restaurants', function($table) {
                    $table->timestamps();
                    $table->softDeletes();
                    $table->increments('id');
                    $table->double('latitude', 10, 8)->nullable();
                    $table->double('longitude', 11, 8)->nullable();
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
