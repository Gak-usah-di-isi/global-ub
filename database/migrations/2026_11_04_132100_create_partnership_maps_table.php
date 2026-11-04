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
        Schema::create('partnership_maps', function (Blueprint $table) {
            $table->id();
            $table->integer('partnership_id');
            $table->foreign('partnership_id')->references('id')->on('partnerships')->cascadeOnDelete();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->foreign('program_id')->references('id')->on('programs')->nullOnDelete();
            $table->string('destination_name');
            $table->string('country_name')->default('Indonesia');
            $table->string('city_name')->nullable();
            $table->string('origin_name')->default('Universitas Brawijaya (Malang)');
            $table->decimal('origin_latitude', 10, 7)->default(-7.9526000);
            $table->decimal('origin_longitude', 10, 7)->default(112.6144000);
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->string('status')->default('Partner');
            $table->string('role')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partnership_maps');
    }
};
