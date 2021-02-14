<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblempresa_emp')->insert([
            'emp_nombre'       	=> 'MOTORTECHNIKAL S.R.L.',
            'emp_titulo'       	=> 'Taller Partner BMW',
            'emp_imagen'        => 'img/logo.jpeg',
            'emp_direccion'     => 'Calle Constelación Austral 127 - Chorrillos - Lima',
            'emp_telefono'      => 'Teléfono: 340-3459 Cel: 994264745',
            'emp_correo'        => 'josuesifuentes@hotmail.com',
            'emp_web'        	=> 'www.motortechnikperu.com',
            'emp_horario'       => 'Lunes a Viernes: 8:00 a 18:00 horas Sábado: 9:00 a 13:00 horas',
            'emp_descripcion'   => 'El cliente deja plena constancia que en la unidad a ingresar al taller de MOTORTECHNIKAL, no deja objetos de valor ni personales a bordo. Este es un acuerdo suscrito entre ambas partes.',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
    }
}
