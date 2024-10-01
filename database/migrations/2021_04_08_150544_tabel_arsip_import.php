<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelArsipImport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_importarsip', function (Blueprint $table) {
            $table->id();
            $table->string('no_pen', 'nama_perusahaan', 'jenis_dok', 'box');
            $table->date('tanggal_dok');
            $table->integer('rak','batch');
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
        //
    }
}
