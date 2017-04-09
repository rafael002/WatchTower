<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('indicators', function (Blueprint $table) {
			
            $table->integer('funct_id')->unsigned();
            $table->foreign('funct_id')->references('id')->on('functs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('indicators', function (Blueprint $table) {
			
			$table->dropForeign('indicators_funct_id_foreign');
			$table->dropColumn('funct_id');
		});
    }
}
