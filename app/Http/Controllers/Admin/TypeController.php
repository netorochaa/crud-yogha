<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;

class TypeController extends Controller
{
    public function index()
    {
        return view('admin.type.index', [
            'types' => Type::all()->sortBy('id')
        ]);
    }

    public function store(StoreTypeRequest $request)
    {
        Type::create($request->all());

        session()->flash('success', 'Tipo de propriedade cadastrado!');
        
        return redirect()->route('type.index');
    }

    public function edit(Type $type)
    {
        return view('admin.type.index', [
            'types' => Type::all()->sortBy('id'),
            'type'  => $type
        ]);
    }

    public function update(UpdateTypeRequest $request, Type $type)
    {
        $type->update(['name' => $request->name]);
        
        session()->flash('success', 'Tipo de propriedade ' . $type->id . ' - ' . $type->name . ' atualizado!');

        return redirect()->route('type.index');
    }

    public function destroy(Type $type)
    {
        $type->delete();

        session()->flash('success', 'Tipo de propriedade removido!');

        return redirect()->route('type.index');
    }
}
