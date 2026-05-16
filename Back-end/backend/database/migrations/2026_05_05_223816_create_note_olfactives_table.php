<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteOlfactivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void {
        Schema::create('note_olfactives', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->enum('type', ['top', 'middle', 'base']);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('note_olfactives');
    }
}
