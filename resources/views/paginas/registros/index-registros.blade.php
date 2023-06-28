@extends('adminlte')

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{ route('createregistry') }}" class="btn bg-gray-dark">Crear Registro</a>
            <div class="form-group"><br>
                <form class=" form-inline" style="display: inline-block">
                    <span><b>Buscar entre fechas: </b></span>
                    <input class="form-control" type="date" name="dateFrom" placeholder="Desde">
                    <input class="form-control" type="date" name="dateTo" placeholder="Hasta">
                    <button class="btn bg-gray-dark" title="Buscar Registro">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" style="table-layout: fixed">
                <thead>
                    <tr>
                        <th>Fecha del Registro</th>
                        <th>Monto</th>
                        <th>Tipo de Pago</th>
                        <th>Peluquero</th>
                        <th>Cajero</th>
                        <th>Detalle de Registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registries as $registry)
                        <tr>
                            <td>{{ date('d-m-Y', strtotime($registry->registry_date)) }}</td>
                            <td>{{ $registry->amount }}</td>
                            <td>{{ $registry->types->name }}</td>
                            <td>{{ $registry->user_loader}}</td>
                            <td>{{ $registry->users->first_name}} {{ $registry->users->last_name}}</td>
                            <td>
                                {{ $registry->detail ?? 'No se guardaron detalles' }}
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <div style="padding: 5px">
                                        @if (empty($registry->deleted_at))
                                            <a class="btn bg-orange" href="{{ route('editregistry', [$registry]) }}"
                                                title="Editar Registro">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        @else
                                            <button class="btn bg-orange" disabled>
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        @endif
                                    </div>
                                    <div style="padding: 5px">
                                        @if (empty($registry->deleted_at))
                                            <form action="{{ route('destroyregistry', [$registry]) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn bg-red" type="submit" title="Borrar Registro">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        @else
                                            <button class="btn bg-red" disabled>
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endif
                                    </div>
                                    <div style="padding: 5px">
                                        @if (!empty($registry->deleted_at))
                                            <form action="{{ route('restoreregistry', [$registry->id]) }}">
                                                @csrf
                                                <button class="btn btn-info" type="submit" title="Restaurar Registro">
                                                    <i class="fa fa-recycle"></i>
                                                </button>
                                            </form>
                                        @else
                                            <button class="btn btn-info" disabled>
                                                <i class="fa fa-recycle"></i>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
