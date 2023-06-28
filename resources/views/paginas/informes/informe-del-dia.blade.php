@extends('adminlte')

@section('content')
    <div class="card">
        <div class="card-header bg-gray-dark">
            <h4 class="mt-1">Informe del día</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered" style="table-layout: fixed">
                <thead>
                    <tr>
                        <th>Registros</th>
                        <th>Monto total</th>
                        <th>Realizo mas cortes</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $registries->total()}}</td>
                            <td>{{ $registries->sum('amount')}}</td>
                            <td>{{ $masCortes}}</td>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
