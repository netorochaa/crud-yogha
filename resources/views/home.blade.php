@extends('templates.master')

@section('content')
    <div class="container p-3">
        @if(count($properties) > 0)
            <h3 class="p-2">Hospedagens</h3>
            <div class="card bg-light">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead">
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
                                    <td><b>{{ $property->name }}</b></td>
                                    <td>{{ $property->type->name ?? '-' }}</td>
                                    <td class="text-muted">{{ $property->city }}</td>
                                    <td class="text-muted">{{ $property->occupant }}</td>
                                    <td class="text-muted">{{ $property->bedroom }}</td>
                                    <td class="text-muted">{{ $property->restroom }}</td>
                                    <td class="text-muted">{{ $property->internet ? 'Sim' : 'Não' }}</td>
                                    <td class="text-muted">{{ $property->pool     ? 'Sim' : 'Não'  }}</td>
                                    <td class="text-muted">{{ $property->created_at }}</td>
                                    <td class="text-muted">{{ $property->updated_at }}</td>
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
        @else
            <h3 class="p-2 text-center">Nenhuma hospedagem encontrada. <a href="{{ route('property.index') }}"> Ir para Cadastro de Propriedade </a> </h3>
        @endif
    </div>
@endsection