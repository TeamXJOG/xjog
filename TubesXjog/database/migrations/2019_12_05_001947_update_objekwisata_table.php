<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateObjekwisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('objekwisata', function (Blueprint $table) {
            $table->text('namaObjekwisata')->nullable();
            $table->longtext('lokasiObjekwisata')->nullable();
            $table->longtext('deskripsiObjekwisata')->nullable();
            $table->integer('htmObjekwisata')->unsigned()->nullable();
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
