<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelArsip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_arsip', function (Blueprint $table) {
            $table->id('id_dok');
            $table->string('no_pen', 'nama_pt', 'jenis_dok', 'rak', 'box', 'batch');
            $table->date('tanggal_dok');
            $table->integer('status', 'user_id');
            $table->timestamps();
            $table->timestamp('deleted_at', 'created_at', 'year');
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
