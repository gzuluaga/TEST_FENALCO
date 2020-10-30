<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblTareasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tareas', function (Blueprint $table) {
            $table->id('id_tarea');
            $table->string('str_descripcion',200);
            $table->string('str_autor',100);
            $table->string('str_estado',10);
            $table->date('dt_fecha_inicio');
            $table->date('dt_fecha_fin');
            $table->boolean('bool_estado')->default(1);
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
        Schema::dropIfExists('tbl_tareas');
    }
}
