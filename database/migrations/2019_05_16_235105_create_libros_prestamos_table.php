<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosPrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros_prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('libro_id');
            $table->foreign('libro_id', 'fk_libroprestamo_libro')->references('id')->on('libros')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'fk_libroprestamo_usuario')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_prestamo');
            $table->string('prestamo_a', '100');
            $table->boolean('estado');
            $table->date('fecha_devolucion')->nullable();
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
        Schema::dropIfExists('libros_prestamos');
    }
}
