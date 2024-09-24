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
        Schema::table(Config::get('database-schedule.table.schedule_histories', 'schedule_histories'), function (Blueprint $table) {
            $table->text('options')->after('output')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(Config::get('database-schedule.table.schedule_histories', 'schedule_histories'), function (Blueprint $table) {
            $table->dropColumn('options');
        });
    }
};
