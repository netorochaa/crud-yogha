<div class="container p-3">
    <h3 class="p-2">Tipos</h3>
    <div class="card bg-light">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Propriedades relacionadas</th>
                            <th>Criado</th>
                            <th>Atualizado</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <td>{{ $type->id }}</td>
                                <td>{{ $type->name }}</td>
                                <td>{{ count($type->properties) }}</td>
                                <td>{{ $type->created_at }}</td>
                                <td>{{ $type->updated_at }}</td>
                                <td>
                                    <button type="button"
                                        onclick="location.href='{{ route('type.edit', $type->id) }}'"
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
</div>
