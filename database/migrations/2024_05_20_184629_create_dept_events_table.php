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
        Schema::create('dept_events', function (Blueprint $table) {
            $table->id();
            $table->string('dept');
            $table->string('title');
            $table->longText('description');
            $table->string('venue');
            $table->dateTime('dateTime');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dept_events');
    }
};
