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
        Schema::create('siswa', function (Blueprint $table) {
            $table->primary('nis');
            $table->string('nis', 50);
            $table->string('nama', 100);
            $table->string('jenis_kelamin', 7);
            $table->string('tmpt_lahir', 20);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('no_tlp', 50);
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
        Schema::dropIfExists('siswa');
    }
};
