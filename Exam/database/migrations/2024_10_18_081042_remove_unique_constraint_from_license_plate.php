<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('vehicles', function (Blueprint $table) {
        $table->dropUnique('vehicles_license_plate_unique'); // Remove the unique constraint
    });
}

public function down()
{
    Schema::table('vehicles', function (Blueprint $table) {
        $table->unique('license_plate'); // Add the unique constraint back if you need to rollback
    });
}

};
