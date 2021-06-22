<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('approve')->nullable()->default(0);
            $table->boolean('pending')->nullable()->default(0);
            $table->boolean('reject')->nullable()->default(0);
            $table->boolean('forward')->nullable()->default(0);
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
        Schema::dropIfExists('demand_lists');
    }
}
