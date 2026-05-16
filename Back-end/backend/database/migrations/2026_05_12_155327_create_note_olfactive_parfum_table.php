<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteOlfactiveParfumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_olfactive_parfum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parfum_id')->constrained()->onDelete('cascade');
            $table->foreignId('note_olfactive_id')->constrained('notes_olfactives')->onDelete('cascade');
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
        Schema::dropIfExists('note_olfactive_parfum');
    }
}
