@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
{!! Form::open(['route' => 'rescisao.index', 'method' => 'post', 'class' => 'form-padrao']) !!}

  @include('templates.formulario.input', ['label' => 'Nome', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
  @include('templates.formulario.input', ['label' => 'CPF', 'input' => 'cpf', 'attributes' => ['placeholder' => 'CPF']])
  @include('templates.formulario.input', ['label' => 'Salário', 'input' => 'salario', 'attributes' => ['placeholder' => 'Salário']])

  @include('templates.formulario.input', ['label' => 'Nome da Empresa', 'input' => 'empresa', 'attributes' => ['placeholder' => 'Nome da Empresa']])

  @include('templates.formulario.input', ['label' => 'Data de Entrada', 'input' => 'entrada', 'attributes' => ['placeholder' => 'Data de Entrada']])
  @include('templates.formulario.input', ['label' => 'Data de Saída', 'input' => 'saida', 'attributes' => ['placeholder' => 'Data de Saída']])

  @include('templates.formulario.submit', ['input' => 'Cadastrar'])

{!! Form::close() !!}@endsection

@section('js-view')
@endsection
