@extends("theme.$theme.layout")

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de Permisos</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permisos as $permiso)
                            <tr>
                                <td>{{$permiso->id}}</td>
                                <td>{{$permiso->nombre}}</td>
                                <td>{{$permiso->slug}}</td>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                {{-- <td width="50"><button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-eye-open"></button></td>
                                <td width="50"><button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></button></td>
                                <td width="50"><button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-trash" style="color:red"></button></td> --}}
                                    
                                <td width="150"><button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-eye-open"></button>
                                    |<button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></button>
                                    |<button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-trash" style="color:red"></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection