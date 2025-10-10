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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('created_by');
            $table->timestamp('date');
            $table->unsignedSmallInteger('duration');
            $table->decimal('distance', 10, 3)->nullable();
            $table->unsignedSmallInteger('avgHr')->nullable();
            $table->unsignedSmallInteger('cal')->nullable();
            $table->foreignId('route_type_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
