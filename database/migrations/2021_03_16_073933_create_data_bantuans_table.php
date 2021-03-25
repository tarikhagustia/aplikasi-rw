<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBantuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_bantuans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('bantuan_id')->constrained('bantuans')->onDelete('cascade');
            $table->bigInteger('panduduk_id');
            $table->bigInteger('no_peserta');
            $table->text('keterangan');
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
        Schema::dropIfExists('data_bantuans');
    }
}
