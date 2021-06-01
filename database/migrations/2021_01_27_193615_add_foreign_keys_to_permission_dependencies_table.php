<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPermissionDependenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('permission_dependencies', function(Blueprint $table)
		{
			$table->foreign('dependency_id')->references('id')->on('permissions')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('permission_id')->references('id')->on('permissions')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('permission_dependencies', function(Blueprint $table)
		{
			$table->dropForeign('permission_dependencies_dependency_id_foreign');
			$table->dropForeign('permission_dependencies_permission_id_foreign');
		});
	}

}
