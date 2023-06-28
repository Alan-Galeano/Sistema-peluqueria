@extends('adminlte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Ultimos Registros</h4>
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{ route('informeregistry')}}" class="btn bg-gray-dark">Informe del día</a>
                </div>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registries as $registry)
                        <tr>
                            <td>{{ date('d-m-Y', strtotime($registry->registry_date)) }}</td>
                            <td>{{ $registry->amount }}</td>
                            <td>{{ $registry->types->name }}</td>
                            <td>{{ $registry->users->first_name}} {{ $registry->users->last_name}}</td>
                            <td>{{ $registry->user_loader}}</td>
                            <td>
                                {{ $registry->detail ?? 'No se guardaron detalles' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
