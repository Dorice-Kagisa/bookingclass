<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('permissions', function(Blueprint $table)
		{
			$table->foreign('permission_group_id')->references('id')->on('permission_groups')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('permissions', function(Blueprint $table)
		{
			$table->dropForeign('permissions_permission_group_id_foreign');
		});
	}

}
