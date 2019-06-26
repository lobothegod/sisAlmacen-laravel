@extends("theme.$theme.layout")

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Menus</h3>
            </div>

            <form class="form-horizontal" action="{{route('guardar_menu')}}" id="form-general" method="POST">
                @csrf
                <div class="box-body">
                    @include('admin.menu.form')
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">@include('includes.boton-form-crear')</div>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
</div>
@endsection