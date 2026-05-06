<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('total', 10, 2);
            $table->string('statut')->default('en_attente');
            $table->string('adresse_livraison');
            $table->string('mode_paiement');
            $table->dateTime('date_commande');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('commandes');
    }
}
