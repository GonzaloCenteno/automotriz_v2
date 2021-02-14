@extends('layouts.app')
@section('title', 'REGISTRO FICHA') 
@section('content')
<style>
    #signature-pad{
        border: 2px solid black;
    }
</style>
<div class="row" id="PaginaCabecera">
    <div class="col">
        <div class="card">
            <div class="card-header card-header-primary" style="background: #383d81">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h4 class="card-title">CREAR FICHA</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form id="FormularioCrearRegistro" method="POST" onkeydown="return event.key != 'Enter';" action="{{ route('registro.store') }}" novalidate>
                    <input type="hidden" id="fic_firma" name="fic_firma"> 
                    @csrf 
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group" id="cls_fic_documento">
                                <label class="control-label">*DNI/RUC.-</label>
                                <input type="number" class="form-control text-uppercase" id="fic_documento" name="fic_documento" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_fic_documento"><strong></strong></span>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group" id="cls_per_id">
                                <input type="hidden" id="per_id" name="per_id">
                                <label class="control-label">*PROPIETARIO.-</label>
                                <input type="text" class="form-control text-uppercase" id="fic_propietario" disabled/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_per_id"><strong></strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <label class="control-label">*E-MAIL.-</label>
                                <input type="email" class="form-control text-uppercase" id="fic_email" disabled/>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label class="control-label">*TELEFONOS.-</label>
                                <input type="text" class="form-control text-uppercase" id="fic_telefonos" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group" id="cls_fic_marca">
                                <label class="control-label">*MARCA.-</label>
                                <input type="text" class="form-control text-uppercase" id="fic_marca" name="fic_marca" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_fic_marca"><strong></strong></span>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group" id="cls_fic_anio">
                                <label class="control-label">*AÑO.-</label>
                                <input type="number" class="form-control text-uppercase" id="fic_anio" name="fic_anio" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_fic_anio"><strong></strong></span>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group" id="cls_fic_modelo">
                                <label class="control-label">*MODELO.-</label>
                                <input type="text" class="form-control text-uppercase" id="fic_modelo" name="fic_modelo" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_fic_modelo"><strong></strong></span>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group" id="cls_fic_km">
                                <label class="control-label">*KILOMETROS.-</label>
                                <input type="number" class="form-control text-uppercase" id="fic_km" name="fic_km" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_fic_km"><strong></strong></span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group" id="cls_fic_placa">
                                <label class="control-label">*PLACA.-</label>
                                <input type="text" class="form-control text-uppercase" id="fic_placa" name="fic_placa" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_fic_placa"><strong></strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 align-self-center text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="fic_tarjetapropiedad" name="fic_tarjetapropiedad" value="1"> TARJETA DE PROPIEDAD
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-2 align-self-center text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="fic_soat" name="fic_soat" value="1"> SOAT
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group" id="cls_fic_fechavencimiento">
                                <label class="control-label">*VENCIMIENTO.-</label>
                                <input type="date" class="form-control" id="fic_fechavencimiento" name="fic_fechavencimiento"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_fic_fechavencimiento"><strong></strong></span>
                            </div>
                        </div>
                        <div class="col-4 align-self-center text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="fic_lunasoscuras" name="fic_lunasoscuras" value="1"> PERMISO DE LUNAS OSCURAS
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row pt-2">
                        <div class="col-md-12 text-center">
                            <h4><b>INVENTARIO DE VEHICULO</b></h4>
                        </div>
                    </div>
                    <div class="row pl-lg-5">
                        @foreach($inventario as $ive)
                        <div class="col-4 col-lg-3">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input btn_checkbox" type="checkbox" id="inlineCheckbox{{ $ive->ive_id }}" name="fic_inventariovehiculo[]" value="{{ $ive->ive_id }}"> {{ $ive->ive_descripcion }}
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <hr>
                    <div class="row pt-2">
                        <div class="col-md-12 text-center">
                            <h4><b>TRABAJOS A REALIZAR</b></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="form-group" id="cls_fic_trabajosarealizar">
                                <textarea id="fic_trabajosarealizar"></textarea>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_fic_trabajosarealizar"><strong></strong></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4><b>NIVEL DE COMBUSTIBLE</b></h4>
                        </div>
                    </div>
                    <div class="row pl-lg-5" id="cls_fic_nivelcombustible">
                        <div class="col-3 col-lg-1 offset-lg-3">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input btn_radio" type="radio" id="exampleRadios1" name="fic_nivelcombustible" value="0">0 
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-1">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input btn_radio" type="radio" id="exampleRadios2" name="fic_nivelcombustible" value="1/4">1/4 
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-1">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input btn_radio" type="radio" id="exampleRadios4" name="fic_nivelcombustible" value="1/2">1/2 
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-1">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input btn_radio" type="radio" id="exampleRadios6" name="fic_nivelcombustible" value="3/4">3/4 
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-1">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input btn_radio" type="radio" id="exampleRadios7" name="fic_nivelcombustible" value="1/1">1/1 
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <span class="material-icons form-control-feedback">clear</span>
                        <span class="invalid-feedback text-center" role="alert" id="error_fic_nivelcombustible"><strong></strong></span>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12" id="fic_svg">
                            @include('registro.svg')
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 text-center align-self-center" id="cls_fic_firma">
                            <div class="form-group">
                                <img id="imagen_previa" style="cursor: pointer;" src="{{ asset('img/firmar_check.jpg') }}" width="30%" height="50%">
                            </div>
                            <span class="material-icons form-control-feedback">clear</span>
                            <span class="invalid-feedback" role="alert" id="error_fic_firma"><strong></strong></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-round btn-md pull-right"><i class="material-icons">save</i> Guardar Datos</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalPersona" tabindex="-1" role="">
    <div class="modal-dialog modal-login modal-lg" role="document">
        <div class="card modal-content">
            <div class="card-header card-header-primary text-center" style="background: #383d81">
                <div class="row">
                    <div class="col-11 text-center">
                        <h4 class="card-title">INFORMACION PROPIETARIO</h4>
                    </div>
                    <div class="col-1">
                        <button type="button" onclick="resetarCampos()" class="close" data-dismiss="modal" aria-hidden="true">
                          <i class="material-icons" style="color: #ffffff">clear</i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="card-category text-center">COMPLETAR LA SIGUIENTE INFORMACION</p>
                <form id="FormularioCrearPersona" method="POST" action="{{ route('persona.store') }}" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group" id="cls_per_documento">
                                <label class="control-label" id="tipo_documento"></label>
                                <input type="number" class="form-control text-uppercase" id="per_documento" name="per_documento" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_per_documento"><strong></strong></span>
                            </div>
                        </div>
                        <div class="col-9 informacion_empresa">
                            <div class="form-group" id="cls_per_razonsocial">
                                <label class="control-label">*RAZON SOCIAL.-</label>
                                <input type="text" class="form-control text-uppercase" id="per_razonsocial" name="per_razonsocial" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_per_razonsocial"><strong></strong></span>
                            </div>
                        </div>
                        <div class="col-9 informacion_persona">
                            <div class="form-group" id="cls_per_nombres">
                                <label class="control-label">*NOMBRES.-</label>
                                <input type="text" class="form-control text-uppercase" id="per_nombres" name="per_nombres" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_per_nombres"><strong></strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="row informacion_persona">
                        <div class="col-6">
                            <div class="form-group" id="cls_per_apaterno">
                                <label class="control-label">*APELLIDO PATERNO.-</label>
                                <input type="text" class="form-control text-uppercase" id="per_apaterno" name="per_apaterno" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_per_apaterno"><strong></strong></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group" id="cls_per_amaterno">
                                <label class="control-label">*APELLIDO MATERNO.-</label>
                                <input type="text" class="form-control text-uppercase" id="per_amaterno" name="per_amaterno" autocomplete="off"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_per_amaterno"><strong></strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <label class="control-label">*E-MAIL.-</label>
                                <input type="text" class="form-control text-uppercase" id="per_email" name="per_email" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label class="control-label">*TELEFONOS.-</label>
                                <input type="number" class="form-control text-uppercase" id="per_telefonos" name="per_telefonos" autocomplete="off"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-round btn-md btn-primary pull-right text-center">GUARDAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalFirma" tabindex="-1" role="">
    <div class="modal-dialog modal-dialog-centered modal-login modal-lg" role="document">
        <div class="card modal-content">
            <div class="card-header card-header-primary text-center" style="background: #383d81">
                <div class="row">
                    <div class="col-11 text-center">
                        <h4 class="card-title">DIBUJAR RUBRICA</h4>
                    </div>
                    <div class="col-1">
                        <button type="button" onclick="resetarCampos()" class="close" data-dismiss="modal" aria-hidden="true">
                          <i class="material-icons" style="color: #ffffff">clear</i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <canvas id="signature-pad" class="signature-pad" width="400%" height="300px"></canvas>
                    </div>
                    <div class="col-4 text-right">
                        <button type="button" id="btn_firmar" class="btn btn-round"><i class="material-icons" style="font-size: 30px">check</i></button>
                    </div>
                    <div class="col-4 text-center">
                        <button type="button" class="btn btn-outline-danger btn-block" data-dismiss="modal">Cerrar</button>
                    </div>
                    <div class="col-4 text-left">
                        <button type="button" id="btn_limpiar_firma" class="btn btn-round"><i class="material-icons" style="font-size: 30px">delete_sweep</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('page-js-script')
<script type="text/javascript">
    var signaturePad;

    jQuery(document).ready(function($){
        CKEDITOR.replace('fic_trabajosarealizar');
        signaturePad = new SignaturePad(document.getElementById('signature-pad'));

        //$("path").css({ fill: "rgba(192, 192, 192,1)" });
        $("path").css({ stroke: "black" });

        var doubleClicked = false;
        $('path').on('click', function() {  
            $(this).css('fill', "#383d81"); 
                if (doubleClicked) {
                    $(this).css('fill', "#ffffff");
                }
                doubleClicked = true;
                setTimeout(() => {
                    doubleClicked = false;
                }, 300);
        });
    });

    $('#btn_firmar').click(function(){
        var data = signaturePad.toDataURL('image/png');
        $('#fic_firma').val(data).trigger("change");
        $("#imagen_previa").attr("src",data);
        $("#imagen_previa").show();
    });

    $('#btn_limpiar_firma').click(function(){
        signaturePad.clear();
        $("#imagen_previa").attr('src','img/firmar_check.jpg');
        $("#fic_firma").val('');
    });

    jQuery(document).on("click", "#imagen_previa", function() {
        $('#ModalFirma').modal({backdrop: 'static', keyboard: false});
        $('#ModalFirma').modal('show');
        signaturePad.clear();
    });

    $("#registro").addClass("active");

    $("#fic_marca, #fic_placa, #fic_modelo, #fic_km, #fic_anio, #fic_trabajosarealizar, #fic_nivelcombustible, #per_documento, #per_nombres, #per_apaterno, #per_amaterno, #per_razonsocial").on('focus', function () {
        limpiarErrores($(this).attr('id')); 
    });

    $("#per_id, #fic_firma").on('change keyup', function() {
        limpiarErrores($(this).attr('id')); 
    });

    $('.btn_radio').change(function(){
        $("#error_fic_nivelcombustible").hide();
        $("#error_fic_nivelcombustible").text('');
        $("#cls_fic_nivelcombustible").removeClass('has-danger');
    });

    $('#FormularioCrearRegistro').submit(function(e){
        e.preventDefault();
        $("#element_svg").attr('width','297mm');
        $("#element_svg").attr('height','210mm');
        var FormularioRegistro = new FormData($(this)[0]);
        FormularioRegistro.append('fic_trabajosarealizar', CKEDITOR.instances.fic_trabajosarealizar.getData());
        FormularioRegistro.append('fic_svg', $("#fic_svg").clone().html());
        
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
        
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            dataType: 'json',
            data: FormularioRegistro,
            processData: false,
            contentType: false,
            success: function (data) 
            {
                alertas(4);
                $(':input','#FormularioCrearRegistro').not(':button, :submit, :reset, :hidden, :radio, :checkbox').val('');
                $(':input','#FormularioCrearRegistro').prop('checked', false).prop('selected', false);
                $('#cls_fic_trabajosarealizar, #cls_per_id', '#FormularioCrearRegistro').removeClass('has-danger');
                $("#error_fic_trabajosarealizar, #error_per_id").hide();
                $('#per_id').val('');
                CKEDITOR.instances['fic_trabajosarealizar'].setData('');
                document.location.href = "#PaginaCabecera";
                signaturePad.clear();
                $("#imagen_previa").attr('src','img/firmar_check.jpg');
                $("#fic_firma").val('');
                $("path").css({ fill: "#ffffff" });
                $("#element_svg").attr('width','100%');
                $("#element_svg").attr('height','100%');
            }
        });
    });

    $("#fic_documento").on( "keydown", function(event) {
        var documento = $(this);
        if (documento.val().length == 8 || documento.val().length == 11 || documento.val().length == 0)
        {
            if (event.which == 13 && !event.shiftKey) {
                event.preventDefault();
                let url = "{{ route('persona.show', 'dni') }}";
                    url = url.replace('dni', documento.val() || 'dni');
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {
                        busqueda:'persona'
                    },
                    dataType: 'json',
                    success: function (data) 
                    {
                        if(data)
                        {
                            $("#per_id").val(data.per_id).trigger("change");
                            $("#fic_propietario").val(data.nombre_completo);
                            $("#fic_email").val(data.per_email);
                            $("#fic_telefonos").val(data.per_telefonos);
                            $("#fic_documento").focus();
                        }
                        else
                        {
                            $('#ModalPersona').modal({backdrop: 'static', keyboard: false});
                            $('#ModalPersona').modal('show');
                        }
                        swal.close();
                    }
                });
            }
        }
    });

    $('#ModalPersona').on('shown.bs.modal', function () {
        $('#per_documento').val($("#fic_documento").val());
        if($("#fic_documento").val().length == 8)
        {
            $("#tipo_documento").text("*DNI.-");
            $('#per_nombres').focus();
            $(".informacion_persona").show();
            $(".informacion_empresa").hide();
            $("#per_documento").attr('name','per_documento');
        }
        else if($("#fic_documento").val().length == 0)
        {
            $("#tipo_documento").text("*DNI.-");
            $('#per_nombres').focus();
            $(".informacion_persona").show();
            $(".informacion_empresa").hide();
            $("#per_documento").attr('name','documento_shet');
        }
        else
        {
            $("#tipo_documento").text("*RUC.-");
            $('#per_razonsocial').focus();
            $(".informacion_persona").hide();
            $(".informacion_empresa").show();
            $("#per_documento").attr('name','per_documento');
        }
        limpiarFormularioPersona();
    });

    $('#FormularioCrearPersona').submit(function(e){
        e.preventDefault();
        var FormularioRegistro = new FormData($(this)[0]);
        FormularioRegistro.append('count', $("#fic_documento").val().length);
        FormularioRegistro.append('per_tipodocumento', ($("#fic_documento").val().length == 8 || $("#fic_documento").val().length == 0) ? 'DNI' : 'RUC');

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            dataType: 'json',
            data: FormularioRegistro,
            processData: false,
            contentType: false,
            success: function (data) 
            {
                alertas(4);
                $('#ModalPersona').modal('hide');
                $("#per_documento").val('');
                limpiarFormularioPersona();
                $("#per_id").val(data.per_id);
                $("#fic_propietario").val(data.nombre_completo);
                $("#fic_email").val(data.per_email);
                $("#fic_telefonos").val(data.per_telefonos);
                $("#fic_marca").focus();
            }
        });
    });

    $("#fic_documento").keyup(function(){
        if ($(this).val().length == 0) 
        {
            resetarCampos();
        }
    });

    $("#fic_documento").on("click", function () {
       $(this).select();
    });

    function resetarCampos()
    {
        $("#per_id").val('');
        $("#fic_propietario").val('');
        $("#fic_email").val('');
        $("#fic_telefonos").val('');
    }

    function limpiarFormularioPersona()
    {
        $("#per_razonsocial").val('');
        $("#per_nombres").val('');
        $("#per_amaterno").val('');
        $("#per_apaterno").val('');
        $("#per_email").val('');
        $("#per_telefonos").val('');
    }

</script>

@stop
@endsection