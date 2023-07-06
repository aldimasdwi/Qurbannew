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
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('name');
            $table->string('email');
            $table->string('no_hp');
            $table->string('harga');
            $table->string('status');
            $table->string('sapi')->nullable();
            $table->string('kambing')->nullable();
            $table->string('dipotong')->default(0);
            $table->string('dicaca')->default(0);
            $table->string('dibungkus')->default(0);
            $table->string('no_ref');
            $table->timestamp('waktu')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayats');
    }
};
