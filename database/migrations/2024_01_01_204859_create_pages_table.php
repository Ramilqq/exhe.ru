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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('longtitle')->nullable();
            $table->string('description')->nullable();
            $table->string('keyword')->nullable();
            $table->string('url')->nullable();

            $table->boolean('top_menu')->default(false);
            $table->boolean('bottom_menu')->default(false);
            $table->boolean('publich')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
