<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->integer('category_id')->unsigned();
            $table->boolean('published');
            $table->boolean('featured');//articulo destacado que se mostrar en el Home
            $table->integer('user_id')->unsigned();
            $table->string('slug');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
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
		Schema::drop('articles');
	}

}
