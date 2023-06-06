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
        Schema::table('items', function (Blueprint $table) {
            $table->string('url_en')->after('photos')->nullable();
            $table->string('url_id')->after('url_en')->nullable();
            $table->string('url_th')->after('url_id')->nullable();
            $table->string('url_vi')->after('url_th')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('url_en');
            $table->dropColumn('url_id');
            $table->dropColumn('url_th');
            $table->dropColumn('url_vi');
        });
    }
};
