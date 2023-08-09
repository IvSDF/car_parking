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
        Schema::create('zones', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('price_per_hour');

            $table->timestamps();
        });

        \App\Models\Zone::create(['name' => 'Green Zone', 'price_per_hour' => 100]);
        \App\Models\Zone::create(['name' => 'Yellow Zone', 'price_per_hour' => 200]);
        \App\Models\Zone::create(['name' => 'Red Zone', 'price_per_hour' => 300]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
