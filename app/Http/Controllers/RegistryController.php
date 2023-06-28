<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRegistryRequest;
use App\Http\Requests\StoreRegistryRequest;
use App\Http\Requests\UpdateRegistryRequest;
use App\Models\Registry;
use App\Models\Type;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegistryController extends Controller
{
    public function index(IndexRegistryRequest $request)
    {
            $registries = Registry::byBetweenDate($request->input('dateFrom'), $request->input('dateTo'))
            ->withTrashed()
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('paginas.registros.index-registros', ['registries' => $registries]);
    }

    public function create()
    {
        $types = Type::all();
        $users = User::all();
        $date_now = Carbon::now()->timezone('America/Argentina/Buenos_Aires')->format('Y-m-d');

        return view('paginas.registros.create-registros', ['types' => $types, 'users' => $users, 'date_now' => $date_now]);
    }

    public function store(StoreRegistryRequest $request)
    {
        $data = $request->all();
        $registry = Registry::create($data);

        return redirect()->route('indexregistry');
    }

    public function show($id)
    {
        //
    }

    public function edit(Registry $registry)
    {
        $types = Type::all();

        return view('paginas.registros.edit-registros', ['types' => $types, 'registry' => $registry]);
    }

    public function update(UpdateRegistryRequest $request, Registry $registry)
    {
        $data = $request->all();
        $registry->update($data);

        return redirect()->route('indexregistry');
    }

    public function destroy(Registry $registry)
    {
        $registry->delete();

        return redirect()->route('indexregistry');
    }

    public function restore($id){

        $registry = Registry::onlyTrashed()->where('id', $id)->first();
        $registry->restore();
        return redirect()->route('indexregistry');
    }
    public function informe()
    {
        $date_now = Carbon::now()->timezone('America/Argentina/Buenos_Aires')->format('Y-m-d');
        $registries = Registry::whereDate('registry_date', $date_now)
            ->orderBy('id', 'desc')
            ->paginate(5);
        $masCortes = Registry::getMostRepeatedUser($date_now);

        return view('paginas.informes.informe-del-dia', ['registries' => $registries, 'masCortes' => $masCortes]);
    }
}
