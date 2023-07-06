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
        Schema::create('jumlahs', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah_hewan')->default(0);
            $table->string('jumlah_sapi')->default(0);
            $table->string('jumlah_kambing')->default(0);
            $table->string('jumlah_terjual')->default(0);
            $table->string('jumlah_dipotong')->default(0);
            $table->string('jumlah_dicaca')->default(0);
            $table->string('jumlah_dibungkus')->default(0);
            $table->string('harga')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlahs');
    }
};
