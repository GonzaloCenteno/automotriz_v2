<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblficha_fic', function (Blueprint $table) {
            $table->bigIncrements('fic_id');
            $table->date('fic_fecha');
            $table->bigInteger('per_id')->unsigned();
            $table->text('fic_marca');
            $table->text('fic_placa');
            $table->text('fic_modelo');
            $table->text('fic_km');
            $table->text('fic_anio');
            $table->boolean('fic_tarjetapropiedad')->default(false);
            $table->boolean('fic_soat')->default(false);
            $table->date('fic_fechavencimiento')->nullable();
            $table->boolean('fic_lunasoscuras')->default(false);
            $table->text('fic_trabajosarealizar');
            $table->text('fic_inventariovehiculo')->nullable();
            $table->text('fic_nivelcombustible');
            $table->Integer('fic_ordentrabajo');
            $table->text('fic_firma');
            $table->longtext('fic_svg');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('per_id')->references('per_id')->on('tblpersona_per');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblficha_fic');
    }
}
