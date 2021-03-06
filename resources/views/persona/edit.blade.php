@extends('layouts.app')
@section('title', 'PERSONAS') 
@section('content')
<style type="text/css">
    .inhabilitar {
        pointer-events: none;
        cursor: not-allowed;
        background-color: rgba(0,0,255,0.1);
    }
</style>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header card-header-primary" style="background: #383d81">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h4 class="card-title">EDITAR PERSONA</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form id="FormularioEditarPersona" method="POST" action="{{ route('persona.update', $persona->per_id) }}">
                @csrf 
                @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <select id="per_tipodocumento" name="per_tipodocumento" class="form-control inhabilitar" aria-describedby="rol">
                                    <option value="DNI" {{ 'DNI' == $persona->per_tipodocumento ? 'selected' : '' }}>DNI</option>  
                                    <option value="RUC" {{ 'RUC' == $persona->per_tipodocumento ? 'selected' : '' }}>RUC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group" id="cls_per_documento">
                                <label class="control-label">*Documento.-</label>
                                <input type="text" class="form-control text-uppercase" id="per_documento" name="per_documento" value="{{ $persona->per_documento }}"/>
                                <span class="material-icons form-control-feedback">clear</span>
                                <span class="invalid-feedback" role="alert" id="error_per_documento"><strong></strong></span>
                            </div>
                        </div>
                    </div>
                    @if($persona->per_tipodocumento == 'RUC')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" id="cls_per_razonsocial">
                                    <label class="control-label">*Razon Social.-</label>
                                    <input type="text" class="form-control text-uppercase" id="per_razonsocial" name="per_razonsocial" value="{{ $persona->per_razonsocial }}"/>
                                    <span class="material-icons form-control-feedback">clear</span>
                                    <span class="invalid-feedback" role="alert" id="error_per_razonsocial"><strong></strong></span>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($persona->per_tipodocumento == 'DNI')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group" id="cls_per_nombres">
                                    <label class="control-label">*Nombres.-</label>
                                    <input type="text" class="form-control text-uppercase" id="per_nombres" name="per_nombres" value="{{ $persona->per_nombres }}"/>
                                    <span class="material-icons form-control-feedback">clear</span>
                                    <span class="invalid-feedback" role="alert" id="error_per_nombres"><strong></strong></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group" id="cls_per_apaterno">
                                    <label class="control-label">*Apellido Paterno.-</label>
                                    <input type="text" class="form-control text-uppercase" id="per_apaterno" name="per_apaterno" value="{{ $persona->per_apaterno }}"/>
                                    <span class="material-icons form-control-feedback">clear</span>
                                    <span class="invalid-feedback" role="alert" id="error_per_apaterno"><strong></strong></span>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        @if($persona->per_tipodocumento == 'DNI')
                            <div class="col-5">
                                <div class="form-group" id="cls_per_amaterno">
                                    <label class="control-label">*Apellido Materno.-</label>
                                    <input type="text" class="form-control text-uppercase" id="per_amaterno" name="per_amaterno" value="{{ $persona->per_amaterno }}"/>
                                    <span class="material-icons form-control-feedback">clear</span>
                                    <span class="invalid-feedback" role="alert" id="error_per_amaterno"><strong></strong></span>
                                </div>
                            </div>
                        @endif
                        <div class="col-3">
                            <div class="form-group">
                                <label class="control-label">*Email.-</label>
                                <input type="text" class="form-control text-uppercase" id="per_email" name="per_email" value="{{ $persona->per_email }}"/>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="control-label">*Telefonos.-</label>
                                <input type="text" class="form-control text-uppercase" id="per_telefonos" name="per_telefonos" value="{{ $persona->per_telefonos }}"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning btn-round btn-sm pull-right"><i class="material-icons">save</i> Modificar Datos</button>
                    <a href="{{ route('persona.index') }}" class="btn btn-danger btn-round btn-sm pull-right"><i class="material-icons">clear</i> Salir</a>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('page-js-script')
<script type="text/javascript">

    $("#personas").addClass("active");

    $("#per_documento, #per_razonsocial, #per_nombres, #per_apaterno, #per_amaterno, #per_email, #per_telefonos").on('focus', function () {
        limpiarErrores($(this).attr('id'));
    });

    $('#FormularioEditarPersona').submit(function(e){
        e.preventDefault();
        var FormularioRegistro = new FormData($(this)[0]);
        FormularioRegistro.append('count', ($("#per_tipodocumento").val() == 'DNI') ? 8 : 11 );
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            dataType: 'json',
            data: FormularioRegistro,
            processData: false,
            contentType: false,
            success: function (data) 
            {
                alertas(2,'persona');
            }
        });
    });

</script>

@stop
@endsection