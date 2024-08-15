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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('nama');
            $table->string('alamat');
<<<<<<< HEAD
            $table->foreignId('sekolah_id')->constrained('sekolah')->cascadeOnDelete()->cascadeOnUpdate();
=======
>>>>>>> 1a49703801dd6a57573c9bf903a4b9ce97cb1a71
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};