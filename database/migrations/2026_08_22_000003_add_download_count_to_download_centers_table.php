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
        Schema::table('download_centers', function (Blueprint $table) {
            if (!Schema::hasColumn('download_centers', 'download_count')) {
                $table->unsignedBigInteger('download_count')->default(0)->after('file');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('download_centers', function (Blueprint $table) {
            if (Schema::hasColumn('download_centers', 'download_count')) {
                $table->dropColumn('download_count');
            }
        });
    }
};
