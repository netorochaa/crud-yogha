<div class="container p-3">
    <h3 class="p-2">Cadastro de tipo de propriedade</h3>
    <div class="card bg-light">
        <div class="card-body">
            @if ($type ?? null)
                {!! Form::model($type, ['route' => ['type.update', $type->id], 'method' => 'PUT']) !!}
            @else
                {!! Form::open(['route' => 'type.store', 'method' => 'POST']) !!}
            @endif
                {!! Form::token() !!}
                <div class="mb-3">
                    {!! Form::label('name', 'Nome', ['class' => 'form-label']) !!}
                    {!! Form::text('name', $type->name ?? null, ['class' => 'form-control', 'id' => 'name']) !!}
                </div>
                {!! Form::submit( $type ?? null ? 'Atualizar' : 'Cadastrar', ['class' => 'btn btn-primary', 'style' => 'float: left']) !!}
            {!! Form::close() !!}

            @if ($type ?? null)
                {!! Form::open(['route' => ['type.destroy', $type->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
</div>
