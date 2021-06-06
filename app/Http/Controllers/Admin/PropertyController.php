<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\StorePropertyRequest;

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
        
        return view('admin.property.index', [
            'types' => Type::all()->pluck('name', 'id')
        ]);
    }

    public function edit(Property $property)
    {
        //
    }

    public function update(Request $request, Property $property)
    {
        //
    }

    public function destroy(Property $property)
    {
        //
    }
}
