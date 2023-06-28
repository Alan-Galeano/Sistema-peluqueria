@extends('adminlte')

@section('content')
    <div class="card col-12">
        <div class="card-header">Crear Registro</div>
        <div class="card-body">
            <form action="{{route('updateregistry', [$registry])}}" method="post">
            @csrf
                <div class="row col-sm-12">
                    <div class="col-sm-4" style="padding: 10px">
                        <div>
                            <label class="label">Fecha del registro</label>
                            <input type="date" value="{{$registry->registry_date}}" name="registry_date"
                                class="form-control @error('registry_date') is-invalid @enderror">
                            @error('registry_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding: 10px">
                        <div>
                            <label class="label">Monto</label>
                            <input type="text" value="{{$registry->amount}}" name="amount"
                                class="form-control @error('amount') is-invalid @enderror">
                            @error('amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding: 10px">
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
                    <div class="col-sm-12" style="padding: 10px">
                        <label class="label">Detalle del Registro</label>
                        <textarea class="form-control @error('detail') is invalid @enderror" name="detail" cols="50" rows="10">
                            {{$registry->detail}}
                        </textarea>
                        @error('detail')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="w-100"></div><br>
                <div style="padding: 10px" class="col-sm-4 form-group">
                    <button type="submit" class="btn btn-success">Editar</button>
                    <a href="{{route('indexregistry')}}" class="btn btn-info">Volver</a>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection
