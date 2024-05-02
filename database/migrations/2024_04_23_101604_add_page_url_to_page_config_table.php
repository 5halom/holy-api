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
        Schema::table('page_config', function (Blueprint $table) {
            $table->string('page_type',50)->change();
            $table->string('page_url');
            $table->integer('parent')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('page_config', function (Blueprint $table) {
            //
        });
    }
};
