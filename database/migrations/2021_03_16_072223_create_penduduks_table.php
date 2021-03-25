<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nik')->unique()->index();
            $table->integer('no_kk');
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin', ['LAKI-LAKI', 'PEREMPUAN']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('gol_darah')->nullable();
            $table->string('status_kawin');
            $table->string('kewarganegaraan');

            $table->string('nik_ayah');
            $table->string('nik_ibu');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('rw');
            $table->string('rt');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->enum('status', ['HIDUP', 'MENINGGAL', 'PINDAH']);

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
        Schema::dropIfExists('penduduks');
    }
}
