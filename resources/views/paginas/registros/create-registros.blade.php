@extends('adminlte')

@section('content')
    <div class="card col-12">
        <div class="card-header">Crear Registro</div>
        <div class="card-body">
            <form action="{{route('storeregistry')}}" method="post">
            @csrf
                <div class="row col-sm-12">
                    <div class="col-sm-3" style="padding: 10px">
                        <div>
                            <label class="label">Fecha del registro</label>
                            <input type="date" name="registry_date" max="{{$date_now}}"
                                class="form-control @error('registry_date') is-invalid @enderror">
                            @error('registry_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-3" style="padding: 10px">
                        <div>
                            <label class="label">Monto</label>
                            <input type="text" name="amount"
                                class="form-control @error('amount') is-invalid @enderror">
                            @error('amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-3" style="padding: 10px">
                        <div>
                            <label class="label">Tipo de Registro</label>
                            <select name="type_id" class="form-control @error('type_id') is-invalid @enderror">
                                @foreach ($types as $type)
                                    <option value="{{$type['id']}}">{{$type['name']}}</option>
                                @endforeach
                            </select>
                            @error('type_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-3" style="padding: 10px">
                        <div>
                            <label class="label">Peluquero</label>
                            <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                @foreach ($users as $user)
                                    <option selected value="{{$user['id']}}">{{$user['first_name']}} {{$user['last_name']}}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-3" style="padding: 10px">
                        <div>
                            <label class="label">Cajero</label>
                            <input type="text" name="user_loader" value="{{ auth()->user()->first_name}} {{ auth()->user()->last_name}}" readonly
                                class="form-control @error('user_loader') is-invalid @enderror">
                            @error('user_loader')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12" style="padding: 10px">
                        <label class="label">Detalle del Registro</label>
                        <textarea class="form-control @error('detail') is invalid @enderror"
                        name="detail" cols="50" rows="10"></textarea>
                        @error('detail')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="w-100"></div><br>
                <div style="padding: 10px" class="col-sm-4 form-group">
                    <button type="submit" class="btn btn-success">Crear</button>
                    <a href="{{route('indexregistry')}}" class="btn btn-info">Volver</a>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection
