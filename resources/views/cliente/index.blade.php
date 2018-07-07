@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')

  @if(session('success'))
      <h3>{{ session('success')['messages'] }}</h3>
  @endif

  {!! Form::open(['route' => 'cliente.store', 'method' => 'post', 'class' => 'form-padrao']) !!}

    @include('templates.formulario.input', ['label' => 'Nome', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
    @include('templates.formulario.input', ['label' => 'CNPJ', 'input' => 'cnpj', 'attributes' => ['placeholder' => 'CNPJ']])
    @include('templates.formulario.input', ['label' => 'Funcionários', 'input' => 'funcionaries', 'attributes' => ['placeholder' => 'Funcionários']])
    @include('templates.formulario.submit', ['input' => 'Cadastrar'])

  {!! Form::close() !!}

  <table class="dafault_table">
    <thead>
      <tr>
        <td>#</td>
        <td>Nome</td>
        <td>CNPJ</td>
        <td>Funcionários</td>
      </tr>
    </thead>

    <tbody>
      @foreach($clientes as $cliente)
      <tr>
        <td>{{ $cliente->idcliente }}</td>
        <td>{{ $cliente->name }}</td>
        <td>{{ $cliente->cnpj }}</td>
        <td>{{ $cliente->funcionaries }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection

@section('js-view')
@endsection
