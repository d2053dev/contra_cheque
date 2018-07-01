@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
{!! Form::open(['route' => 'cliente.store', 'method' => 'post', 'class' => 'form-padrao']) !!}

  @include('templates.formulario.input', ['label' => 'Nome', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
  @include('templates.formulario.input', ['label' => 'CNPJ', 'input' => 'cnpj', 'attributes' => ['placeholder' => 'CNPJ']])
  @include('templates.formulario.input', ['label' => 'Funcionários', 'input' => 'funcionaries', 'attributes' => ['placeholder' => 'Funcionários']])
  @include('templates.formulario.submit', ['input' => 'Cadastrar'])

{!! Form::close() !!}
@endsection

@section('js-view')
@endsection
