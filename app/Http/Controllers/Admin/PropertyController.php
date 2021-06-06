<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;

class PropertyController extends Controller
{
    public function index()
    {
        return view('admin.property.index', [
            'types' => Type::all()->pluck('name', 'id')
        ]);
    }

    public function store(StorePropertyRequest $request)
    {
        Property::create($request->all());

        session()->flash('success', 'Propriedade cadastrada!');
        
        return redirect()->route('property.index');
    }

    public function edit(Property $property)
    {
        return view('admin.property.index', [
            'property'  => $property, 
            'types'     => Type::all()->pluck('name', 'id')
        ]);
    }

    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $property->update([
            'name'      => $request->name,
            'city'      => $request->city,
            'occupant'  => $request->occupant,
            'bedroom'   => $request->bedroom,
            'restroom'  => $request->restroom,
            'internet'  => $request->get('internet') ?? null,
            'pool'      => $request->get('pool')     ?? null,
            'type_id'   => $request->type_id
        ]);
        
        session()->flash('success', 'Propriedade ' . $property->id . ' - ' . $property->name . ' atualizada!');

        return redirect()->route('home');
    }

    public function destroy(Property $property)
    {
        //
    }
}
