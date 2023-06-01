<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interactive_session_trainer', function (Blueprint $table) {
            $table->unsignedBigInteger('interactive_session_id');
            $table->unsignedBigInteger('trainer_id');
            $table->foreign('interactive_session_id')->references('id')->on('interactive_sessions')->onDelete('cascade');
            $table->foreign('trainer_id')->references('id')->on('trainers')->onDelete('cascade');
            $table->primary(['interactive_session_id', 'trainer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interactive_session_trainer');
    }
};
