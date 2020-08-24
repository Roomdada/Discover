<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRecentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_recents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longtext('description');
            $table->integer('price');
            $table->integer('price_vip');
            $table->string('place');
            $table->integer('ticket');
            $table->integer('ticket_vip');
            $table->date('event_date');
            $table->string('event_hourb');
            $table->date('event_hourf');
            $table->string('image');
            $table->integer('artiste_id');
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
        Schema::dropIfExists('event_recents');
    }
}
