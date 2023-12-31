<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('juzs', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('number');

            $table->text('first_verse');
            $table->smallInteger('first_verse_id');

            $table->text('last_verse');
            $table->smallInteger('last_verse_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juzs');
    }
};
