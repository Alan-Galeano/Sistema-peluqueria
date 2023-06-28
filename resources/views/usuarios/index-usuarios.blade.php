@if (auth()->user()->role_id == 1)
    @extends('adminlte')

    @section('content')
        <div class="card">
            <div class="col-12 table-responsive">
                <div class="card-header">
                    <a href="{{ route('createuser') }}" class="btn bg-gray-dark">Crear Usuario</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" style="table-layout: fixed">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Nombre y Apellido</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        {{ $item->role->role_name}}
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <div style="padding: 5px">
                                                @if (empty($item->deleted_at))
                                                    <a class="btn bg-orange" href="{{ route('edituser', [$item]) }}"
                                                        title="Editar Usuario">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                @else
                                                    <button class="btn btn-warning" disabled>
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                @endif
                                            </div>
                                            <div style="padding: 5px">
                                                @if (empty($item->deleted_at))
                                                    <form action="{{ route('destroyuser', [$item]) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn bg-red" type="submit" title="Borrar Usuario">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                @else
                                                    <button class="btn btn-danger" disabled>
                                                        <i class="fa fa-trash"></i>
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
        </div>
    </div>
    @endsection
@else
    <script type="text/javascript">
        window.location.href = "/home";
    </script>
@endif
