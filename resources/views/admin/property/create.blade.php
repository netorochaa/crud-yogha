<div class="container p-3">
    <h3 class="p-2">Cadastro de propriedade</h3>
    <div class="card bg-light">
        <div class="card-body">
            @if ($property ?? null)
                {!! Form::model($property, ['route' => ['property.update', $property->id], 'method' => 'PUT']) !!}
            @else
                {!! Form::open(['route' => 'property.store', 'method' => 'POST']) !!}
            @endif
                {!! Form::token() !!}
                <div class="mb-3">
                    {!! Form::label('name', 'Nome', ['class' => 'form-label']) !!}
                    {!! Form::text('name', $property->name ?? null, ['class' => 'form-control', 'id' => 'name']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('type', 'Tipo', ['class' => 'form-label']) !!}
                    {!! Form::select('type_id', $types, $property->type_id ?? null, ['class' => 'form-select', 'id' => 'type']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('city', 'Cidade', ['class' => 'form-label']) !!}
                    {!! Form::text('city', $property->city ?? null, ['class' => 'form-control', 'id' => 'city']) !!}
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-sm-4">
                            {!! Form::label('occupant', 'Ocupantes', ['class' => 'form-label']) !!}
                            {!! Form::text('occupant', $property->occupant ?? null, ['class' => 'form-control', 'id' => 'occupant']) !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('bedroom', 'Quartos', ['class' => 'form-label']) !!}
                            {!! Form::text('bedroom', $property->bedroom ?? null, ['class' => 'form-control', 'id' => 'bedroom']) !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('restroom', 'Banheiros', ['class' => 'form-label']) !!}
                            {!! Form::text('restroom', $property->restroom ?? null, ['class' => 'form-control', 'id' => 'restroom']) !!}
                        </div>
                    </div>
                </div>
                <div class="mb-1 form-check">
                    {!! Form::checkbox('internet', null, $property->internet ?? null, ['class' => 'form-check-input', 'id' => 'internet']) !!}
                    {!! Form::label('internet', 'Internet disponível', ['class' => 'form-check-label']) !!}
                </div>
                <div class="mb-3 form-check">
                    {!! Form::checkbox('pool', null, $property->pool ?? null, ['class' => 'form-check-input', 'id' => 'pool']) !!}
                    {!! Form::label('pool', 'Piscina', ['class' => 'form-check-label']) !!}
                </div>
                {!! Form::submit( $property ?? null ? 'Atualizar' : 'Cadastrar', ['class' => 'btn btn-primary', 'style' => 'float: left']) !!}
            {!! Form::close() !!}

            @if ($property ?? null)
                {!! Form::open(['route' => ['property.destroy', $property->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
</div>
