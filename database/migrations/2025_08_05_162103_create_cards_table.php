<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('cards', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Zuordnung zum eingeloggten Nutzer
        $table->string('name');                  // z. B. Glurak EX
        $table->string('set')->nullable();       // z. B. 151
        $table->string('set_number')->nullable();// z. B. sv2a 201/165
        $table->string('rarity');                // AR, SR, SAR
        $table->string('card_type')->nullable(); // Pokémon, Trainer, Energie
        $table->string('language')->default('JPN');
        $table->string('condition')->nullable(); // Mint, Played etc.
        $table->decimal('price', 8, 2)->nullable(); // z. B. 24.99 €
        $table->text('notes')->nullable();       // Bemerkungen
        $table->timestamps();                    // created_at, updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
