<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTanggalMulaiAndTanggalSelesaiToObjekwisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('objekwisata', function (Blueprint $table) {
            //
            $table->date('tanggalMulai')->nullable();
            $table->date('tanggalSelesai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('objekwisata', function (Blueprint $table) {
            //
            $table->dropColumn(['tanggalMulai',  'tanggalSelesai']);
        });
    }
}
