<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
		$table->increments('id');
		            $table->string('title');
		            $table->string('description');
		            $table->string('slug');
		            $table->boolean('published');
		            $table->softDeletes();
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
		Schema::drop('categories');
	}
}
