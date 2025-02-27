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
        Schema::create('z_earnings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('zone_id');
            $table->integer('downline');
            $table->double('amount', 8,2);
            $table->string('currency')->default('spc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('z_earnings');
    }
};
