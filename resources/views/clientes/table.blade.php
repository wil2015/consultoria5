<div class="table-responsive">
    <table class="table" id="clientes-table">
        <thead>
            <tr>
                <th>Nome</th>
        <th>Endereco</th>
        <th>Estado</th>
        <th>Bairro</th>
        <th>Complemento</th>
        <th>Localidade</th>
        <th>Numero</th>
        <th>Telefone</th>
        <th>Nascimento</th>
        <th>Cep</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $clientes)
            <tr>
                <td>{!! $clientes->nome !!}</td>
            <td>{!! $clientes->endereco !!}</td>
            <td>{!! $clientes->estado !!}</td>
            <td>{!! $clientes->bairro !!}</td>
            <td>{!! $clientes->complemento !!}</td>
            <td>{!! $clientes->localidade !!}</td>
            <td>{!! $clientes->numero !!}</td>
            <td>{!! $clientes->telefone !!}</td>
            <td>{!! $clientes->nascimento -> format('d/m/Y') !!}</td>
            <td>{!! $clientes->cep !!}</td>
                <td>
                    {!! Form::open(['route' => ['clientes.destroy', $clientes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('clientes.show', [$clientes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('clientes.edit', [$clientes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem Certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
