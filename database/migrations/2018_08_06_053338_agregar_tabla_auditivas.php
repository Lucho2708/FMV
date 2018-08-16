<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaAuditivas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditivas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('fuerte',['funcional','semifuncional','no funcional']);
            $table->enum('leve',['funcional','semifuncional','no funcional']);
            $table->enum('vibrante',['funcional','semifuncional','no funcional']);
            $table->string('observaciones',100);
            $table->unsignedInteger('perceptiva_id');

            $table->foreign('perceptiva_id')->references('id')->on('perceptivas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auditivas');
    }
}
