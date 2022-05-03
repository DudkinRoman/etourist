<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anegdot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        /*`id` int NOT NULL,
        `text` text NOT NULL,
        `type` int DEFAULT NULL*/
        Schema::create('anegdot', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anegdot');
    }
}
