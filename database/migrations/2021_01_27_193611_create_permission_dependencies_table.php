<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionDependenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permission_dependencies', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('permission_id')->index();
			$table->bigInteger('dependency_id')->index();
            $table->timestamps();
            $table->softDeletes();
			$table->unique(['permission_id','dependency_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permission_dependencies');
	}

}
