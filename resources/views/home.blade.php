@extends('templates.master')

@section('content')
    <div class="container p-3">
        <h3 class="p-2">Hospedagens</h3>
        <div class="card bg-light">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Cidade</th>
                            <th>Ocupantes</th>
                            <th>Banheiros</th>
                            <th>Quartos</th>
                            <th>Internet</th>
                            <th>Piscina</th>
                            <th>Criado</th>
                            <th>Atualizado</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properties as $property)
                        <tr>
                            <td>{{ $property->id }}</td>
                            <td>{{ $property->name }}</td>
                            <td>{{ $property->type->name }}</td>
                            <td>{{ $property->city }}</td>
                            <td>{{ $property->occupant }}</td>
                            <td>{{ $property->bedroom }}</td>
                            <td>{{ $property->restroom }}</td>
                            <td>{{ $property->internet }}</td>
                            <td>{{ $property->pool }}</td>
                            <td>{{ $property->created_at }}</td>
                            <td>{{ $property->updated_at }}</td>
                            <td>
                                <button type="button" 
                                        onclick="location.href='{{ route('property.edit', $property->id) }}'" 
                                        class="btn btn-info">
                                            Editar
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection