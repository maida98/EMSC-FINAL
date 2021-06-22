<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDemandAndEventIdToDemandListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demand_lists', function (Blueprint $table) {
            $table->string('demands')->nullable();
            $table->string('event_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demand_lists', function (Blueprint $table) {
            $table->dropColumn(['demands','event_id']);
        });
    }
}
