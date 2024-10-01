<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karung', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Sesuaikan dengan kolom yang Anda butuhkan
            // Tambahkan kolom lain sesuai kebutuhan
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('karung');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karung');
    }
}
