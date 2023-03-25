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
        Schema::create('_pengaduans_', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pengaduan');
            $table->char('nik');
            $table->text('isi_laporan');
            $table->string('foto');
            $table->enum('status', ['0', 'Proses', 'Selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_pengaduans_');
    }
};
