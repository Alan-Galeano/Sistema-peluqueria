@if (auth()->user()->role_id == 1)
    @extends('adminlte')

    @section('content')
        <div class="card col-12">
            <div class="card-header">Crear Usuario</div>
            <div class="card-body">
                <form method="POST" action="{{ route('updateuser', [$user]) }}">
                    @method('PUT');
                    @csrf;
                    <div class="row col-sm-12">
                        <div class="col-sm-4">
                            <div>
                                <label class="label">Nombre de Usuario</label>
                                <input type="text" value="{{ $user->username }}" name="username"
                                    class="form-control @error('username') is-invalid @enderror">
                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <label class="label">Nombre</label>
                                <input type="text" value="{{ $user->first_name }}" name="first_name"
                                    class="form-control @error('first_name') is-invalid @enderror">
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <label class="label">Apellido</label>
                                <input type="text" value="{{ $user->last_name }}" name="last_name"
                                    class="form-control @error('last_name') is-invalid @enderror">
                                @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-100"></div><br>
                        <div class="col-sm-4">
                            <div>
                                <label class="label">Email</label>
                                <input type="email" value="{{ $user->email }}" name="email"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <label class="label">Contraseña</label>
                                <input type="password" name="password" autocomplete="off"
                                    class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <label class="label">Rol</label>
                                <select name="role_id" class="form-control">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role['id'] }}">{{ $role['role_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-100"></div><br>
                        <div class="col-sm-4 form-group">
                            <button type="submit" class="btn btn-success">Editar</button>
                            <a href="{{ route('indexusers') }}" class="btn btn-info">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
@else
    <script type="text/javascript">
        window.location.href = "/home";
    </script>
@endif
