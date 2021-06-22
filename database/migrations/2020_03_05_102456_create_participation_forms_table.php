<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participation_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_id')->nullable();
            $table->string('std_name')->nullable();
            $table->string('std_reg')->nullable();
            $table->string('std_phone')->nullable();

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
        Schema::dropIfExists('participation_forms');
    }
}
