<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $clientes->nome !!}</p>
</div>

<!-- Endereco Field -->
<div class="form-group">
    {!! Form::label('endereco', 'Endereco:') !!}
    <p>{!! $clientes->endereco !!}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $clientes->estado !!}</p>
</div>

<!-- Bairro Field -->
<div class="form-group">
    {!! Form::label('bairro', 'Bairro:') !!}
    <p>{!! $clientes->bairro !!}</p>
</div>

<!-- Complemento Field -->
<div class="form-group">
    {!! Form::label('complemento', 'Complemento:') !!}
    <p>{!! $clientes->complemento !!}</p>
</div>

<!-- Localidade Field -->
<div class="form-group">
    {!! Form::label('localidade', 'Localidade:') !!}
    <p>{!! $clientes->localidade !!}</p>
</div>

<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{!! $clientes->numero !!}</p>
</div>

<!-- Telefone Field -->
<div class="form-group">
    {!! Form::label('telefone', 'Telefone:') !!}
    <p>{!! $clientes->telefone !!}</p>
</div>

<!-- Nascimento Field -->
<div class="form-group">
    {!! Form::label('nascimento', 'Nascimento:') !!}
    <p>{!! $clientes->nascimento -> format('d/m/Y') !!}</p>
</div>

<!-- Cep Field -->
<div class="form-group">
    {!! Form::label('cep', 'Cep:') !!}
    <p>{!! $clientes->cep !!}</p>
</div>

