<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            // Add the 'name' column if it doesn't exist
            if (!Schema::hasColumn('banners', 'name')) {
                $table->string('name')->after('priority');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            // Drop the 'name' column if it exists
            if (Schema::hasColumn('banners', 'name')) {
                $table->dropColumn('name');
            }
        });
    }
};


