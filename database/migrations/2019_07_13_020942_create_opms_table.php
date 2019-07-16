<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opm', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opm_superior_id');
            $table->string('opm_sigla');
            $table->integer('tipo_opm_id');
            $table->integer('municipio_id');
            $table->string('descricao');
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
        Schema::dropIfExists('opm');
    }
}
