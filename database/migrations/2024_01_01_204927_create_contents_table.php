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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('sort')->nullable()->default(0);
            $table->string('image')->nullable();
            $table->string('action')->nullable();
            $table->boolean('html')->nullable()->default(true);
            $table->text('text')->nullable();

            $table->morphs('modeltable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
