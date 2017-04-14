<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meetings', function (Blueprint $table) {
            
            $table->integer('congregation_id')->unsigned();
            $table->foreign('congregation_id')->references('id')->on('congregations');
            
            $table->integer('days_id')->unsigned();
            $table->foreign('days_id')->references('id')->on('days');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meetings', function (Blueprint $table) {

			$table->dropForeign('meetings_congregation_id_foreign');
			$table->dropColumn('congregation_id');
			
			$table->dropForeign('meetings_day_id_foreign');
			$table->dropColumn('day_id');

        });
    }
}
