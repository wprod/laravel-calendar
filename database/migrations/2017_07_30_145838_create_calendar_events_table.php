<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('calendar_events')) {

            Schema::create('calendar_events', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->dateTime('start');
                $table->dateTime('end');
                $table->boolean('is_all_day');
                $table->string('background_color')->nullable();
                $table->timestamps();
            });
        }

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_events');
    }
}
