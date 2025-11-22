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
        Schema::table('about_sections', function (Blueprint $table) {
            $table->string('achievement_1_value')->default('57');
            $table->string('achievement_1_label')->default('Countries Represented');
            $table->string('achievement_2_value')->default('100+');
            $table->string('achievement_2_label')->default('International Partner Institutions');
            $table->string('achievement_3_value')->default('Top 700');
            $table->string('achievement_3_label')->default('QS World University Rankings');
            $table->string('achievement_4_value')->default('50+');
            $table->string('achievement_4_label')->default('Global Mobility Programs');
            $table->string('achievement_5_value')->default('Top 150');
            $table->string('achievement_5_label')->default('UI GreenMetric World University');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {
            $table->dropColumn([
                'achievement_1_value', 'achievement_1_label',
                'achievement_2_value', 'achievement_2_label',
                'achievement_3_value', 'achievement_3_label',
                'achievement_4_value', 'achievement_4_label',
                'achievement_5_value', 'achievement_5_label',
            ]);
        });
    }
};
