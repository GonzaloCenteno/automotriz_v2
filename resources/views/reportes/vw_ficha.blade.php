<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>FICHA</title>
        <link href="{{ asset('css/pdf.css') }}" rel="stylesheet">
        <style>
            .move-ahead { counter-increment: page 2; position: absolute; visibility: hidden; }
            .pagenum:after { content:' ' counter(page); }
            .footer {position: fixed }
        </style>
    </head>

    <body>
        <table>
            <tbody>
                <tr class="tablaTitulo"> 
                    <td style="text-align: left" colspan="6"><img src="{{ asset($empresa->emp_imagen) }}" width="60%" height="90px"><font style="font-style: bold">{{ $empresa->emp_nombre }}</font></td>
                    <td style="text-align: center"><img src="{{ asset('img/audi.jfif') }}" width="18%" height="55px"><img src="{{ asset('img/bmw.jfif') }}" width="9%" height="55px"><img src="{{ asset('img/mercedes.jfif') }}" width="9%" height="55px"></td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td rowspan="4" style="width: 34%">
                        <font style="font-style: bold; font-size: 1.8em">{{ $empresa->emp_titulo }}</font><br>
                        {{ $empresa->emp_direccion }}<br>
                        Teléfono: {{ $empresa->emp_telefono }}<br>
                        E-mail: {{ $empresa->emp_correo }}<br>
                        Website: {{ $empresa->emp_web }}<br>
                        Horario: {{ $empresa->emp_horario }}<br>
                    </td>
                    <td style="text-align: center;font-size: 1.01em; width: 21%">Marca <font class="textoDescripcion" style="padding: 5px;">{{ $sql->fic_marca }}</font></td>
                    <td style="text-align: center;font-size: 1.01em; width: 22%">Año <font class="textoDescripcion" style="padding: 5px">{{ $sql->fic_anio }}</font></td>
                    <td colspan="2" class="numOrden" style="text-align: center; width: 23%" colspan="3">N°OT {{ str_pad($sql->fic_ordentrabajo,  6, "0",STR_PAD_LEFT) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center;font-size: 1.01em;">Modelo <font class="textoDescripcion" style="padding: 5px">{{ $sql->fic_modelo }}</font></td>
                    <td style="text-align: center;font-size: 1.01em;">Km. <font class="textoDescripcion" style="padding: 5px">{{ $sql->fic_km }}</font></td>
                    <td colspan="2" style="text-align: center;font-size: 1.01em;">Placa <font class="textoDescripcion" style="padding: 5px">{{ $sql->fic_placa }}</font></td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size: 1.01em;">@if($sql->fic_tarjetapropiedad) Tarj Propiedad (x) @else Tarj Propiedad ( ) @endif</td>
                    <td style="text-align: left;font-size: 1.01em;">@if($sql->fic_soat) SOAT (x) @else SOAT ( ) @endif</td>
                    <td colspan="2" style="text-align: left;font-size: 1.01em;">Fecha Ven: {{ ($sql->fic_fechavencimiento) ? \Carbon\Carbon::parse($sql->fic_fechavencimiento)->format('d/m/Y') : '../../....' }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3" style="text-align: left;font-size: 1.01em;">@if($sql->fic_lunasoscuras) Permiso de Lunas Oscuras (x) @else Permiso de Lunas Oscuras ( ) @endif</td>
                </tr>
                <tr>
                    <td colspan="2" class="bordeBajo" style="font-size: 1.01em;">Nombre: {{ $sql->persona->nombreCompleto }}</td>
                    <td colspan="1" class="bordeBajo" style="font-size: 1.01em;">Teléfono: {{ $sql->persona->per_telefonos }}</td>
                    <td colspan="2" class="bordeBajo" style="font-size: 1.01em;">Fecha: {{ \Carbon\Carbon::parse($sql->fic_fecha)->format('d/m/Y') }}</td>
                </tr>
            </tbody>
        </table>
        <table class="tablaInventarioVehiculo">
            <tbody>
                <tr>
                    <td class="textinventario" style="text-align: center" colspan="8"><div id="cabeceraInventario">INVENTARIO VEHICULO</div></td>
                </tr>
                <tr>
                    <td style="text-align: center" colspan="8">{{ $inventario }}</td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td class="textoDescripcion" rowspan="3">{!! $html !!}</td>
                    <td style="text-align: center" class="textoDescripcion"><img src="{{ asset('img/gasolinera.jpg') }}" width="20%" height="80px"><br><font style="font-style: bold; font-size: 1.5em">{{ $sql->fic_nivelcombustible }}</font></td>
                </tr>
                <tr>
                    <td style="text-align: center" class="textoDescripcion"><b>ACUERDO ENTRE LAS PARTES<b></td>
                </tr>
                <tr>
                    <td style="text-align: center; padding: 10px 10px;" class="textoDescripcion">{{ $empresa->emp_descripcion }}</td>
                </tr>
            </tbody>
        </table>
        <table class="tablaTrabajosaRealizar">
            <tbody>
                <tr>
                    <td class="tituloTrabajosaRealizar" style="" colspan="8">TRABAJOS A REALIZAR:</td>
                </tr>
                <tr>
                    <td colspan="8">{!! $sql->fic_trabajosarealizar !!}</td>
                </tr>
                <tr>
                    <td style="text-align: center;" colspan="8"><img src="{{ $sql->fic_firma }}" width="150px" height="90px"></td>
                </tr>
                <tr>
                    <td style="text-align: center;" colspan="8"><font style="border-top: 1px solid #000000; margin-top: 5px">{{ $sql->persona->nombreCompleto }}</font></td>
                </tr>
            </tbody>
        </table>
    </body>

</html>